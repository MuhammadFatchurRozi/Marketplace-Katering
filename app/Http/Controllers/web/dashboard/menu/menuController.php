<?php

namespace App\Http\Controllers\web\dashboard\menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

// Call the models
use App\Models\merchant\M_Menu;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getMenu = M_Menu::where('user_id', Auth::user()->id)->paginate(10);
        return view ('page.dashboard.menu.index', compact('getMenu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'namaMenu' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ];

        $message = [
            'required' => 'Kolom :attribute tidak boleh kosong',
            'numeric' => 'Kolom :attribute harus berupa angka',
            'image' => 'Kolom :attribute harus berupa gambar',
            'mimes' => 'Kolom :attribute harus berupa gambar dengan format jpeg, png, jpg, gif, svg',
            'max' => 'Kolom :attribute tidak boleh lebih dari 2MB',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            toastr()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $icon = $request->file('icon');
        $iconName = time() . '.' . $icon->extension();
        $icon->move(public_path('storage/menu'), $iconName);

        $store = M_Menu::create([
            'id' => Str::uuid(),
            'user_id' => Auth::user()->id,
            'nama' => $request->namaMenu,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'icon' => $iconName,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($store) {
            toastr()->success('Berhasil menambahkan menu baru');
            return redirect()->back();
        } else {
            toastr()->error('Gagal menambahkan menu baru');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $getMenu = M_Menu::where('id', $id)->first();
        return view ('page.dashboard.menu.edit', compact('getMenu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'namaMenu' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ];

        $message = [
            'required' => 'Kolom :attribute tidak boleh kosong',
            'numeric' => 'Kolom :attribute harus berupa angka',
            'image' => 'Kolom :attribute harus berupa gambar',
            'mimes' => 'Kolom :attribute harus berupa gambar dengan format jpeg, png, jpg, gif, svg',
            'max' => 'Kolom :attribute tidak boleh lebih dari 2MB',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            toastr()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $getMenu = M_Menu::where('id', $id)->first();

        if ($request->file('icon')) {
            $icon = $request->file('icon');
            $iconName = time() . '.' . $icon->extension();
            $icon->move(public_path('storage/menu'), $iconName);
        } else {
            $iconName = $getMenu->icon;
        }

        $update = M_Menu::where('id', $id)->update([
            'nama' => $request->namaMenu,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'icon' => $iconName,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($update) {
            toastr()->success('Berhasil mengubah menu');
            return redirect()->route('menu.index');
        } else {
            toastr()->error('Gagal mengubah menu');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = M_Menu::where('id', $id)->delete();

        if ($delete) {
            toastr()->success('Berhasil menghapus menu');
            return redirect()->back();
        } else {
            toastr()->error('Gagal menghapus menu');
            return redirect()->back();
        }
    }
}
