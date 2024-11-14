<?php

namespace App\Http\Controllers\web\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

// Call Model
use App\Models\merchant\M_Menu;
use App\Models\customers\C_Cart;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // check auth
        if (!auth()->check()) {
            toastr()->error('Silahkan login terlebih dahulu');
            return redirect()->back();
        }

        $getMenu = M_Menu::where('id', $request->id)->first();
    
        // check menu in cart
        $checkCart = C_Cart::where('id', $request->id)->where('user_id', auth()->user()->id)->first();
        if ($checkCart) {
            $checkCart->update([
                'quantity' => $checkCart->quantity + 1,
            ]);

            toastr()->success('Berhasil menambahkan menu ke keranjang');
            return redirect()->back();
        } else {
            C_Cart::create([
                'id' => Str::uuid(),
                'user_id' => auth()->user()->id,
                'menu_id' => $request->id,
                'quantity' => 1,
                'tanggal_order' => date('Y-m-d H:i:s'),
            ]);

            toastr()->success('Berhasil menambahkan menu ke keranjang');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
