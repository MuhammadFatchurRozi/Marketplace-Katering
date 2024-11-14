<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

// Call model
use App\Models\auth\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);


        // Sesuaikan durasi cookie di sini (dalam menit)
        $customRememberMeTimeInMinutes = 1440 * 30; // 30 hari

        $rememberTokenCookieKey = $this->getRecallerName();
        $rememberTokenValue = Cookie::get($rememberTokenCookieKey);
        Cookie::queue($rememberTokenCookieKey, $rememberTokenValue, $customRememberMeTimeInMinutes);
        
        return $this->authenticated($request, $this->guard()->user())
                        ?: redirect()->intended($this->redirectPath());
    }


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function redirectTo()
    {
        return Auth::user()->role . '/dashboard';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        // $this->middleware('auth')->only('logout');
        // if auth in session redirect to dashboard
    }

    /**
     * Show the login form
     *
     * @return string
     */
    public function showLoginForm()
    {   
        return view('auth.login');
    }

    /**
     * After login, redirect to the user's profile page
     *
     * @return string
     */
    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
            'remember' => 'nullable|boolean', // Ensure boolean type
        ]);
    
        $credentials = Auth::attempt(
            [
                'email' => $request->input('login'),
                'password' => $request->input('password'),
            ],$request->boolean('remember-me')
        );

    
        if ($credentials) {
            $user = Auth::user();
    
            // Check if password needs to be updated
            if (Hash::needsRehash($user->password)) {
                $user->password = Hash::make($request->input('password'));
                $user->save();
            }
    
            toastr()->success('Welcome back, ' . $user->name);
            if ($user->role == 1) {
                return redirect()->route('index');
            }
            return redirect()->route('role.dashboard.index', Auth::user()->role);
        }

        // Handle case where Auth::user() is null
        if (!Auth::check()) {
            toastr()->error('Email or password is incorrect');
        }
    
        // toastr()->error('Email or password is incorrect');
        return back()->withErrors([
            'email' => 'Email cannot be found or password is incorrect',
        ]);
    }

    /**
     * After logout, redirect to the login page
     *
     * @return string
     */

    public function logout(Request $request)
    {
        // check auth if in session or not
        if(!Auth::check()){
            toastr()->error('You are not logged in');
            return redirect()->to(Auth::user()->role.'/dashboard');
        }
        
        Auth::logout();
        toastr()->success('Logout Successfully');
        return redirect()->route('index');
    }

    /**
     * Show the user's profile page
     *
     * @return string
     */
    public function myProfile()
    {
        if (!Auth::check()) {
            toastr()->error('You are not logged in');
            return redirect()->route('login');
        }
    
        $myProfile = Auth::user();
        $email = explode('@', $myProfile->email)[0];
    
        return view('page.dashboard.my-profile', compact('myProfile', 'email'));
    }

    /**
     * Update the user's profile
     *
     * @return string
     */
    public function updateProfile(Request $request, string $id)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'no_telp' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->no_telp = $request->input('no_telp');
        $user->occupation = $request->input('occupation');

        if ($request->hasFile('avatar')) {
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }

        $user->save();

        toastr()->success('Profile updated successfully');
        return redirect()->route('my-profile');
    }
}
