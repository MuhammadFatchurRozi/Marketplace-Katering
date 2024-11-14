<?php

namespace App\Http\Controllers\web\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\merchant\M_Menu;
use App\Models\customers\C_Cart;
use App\Models\User;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getCart = C_Cart::with('menu')->where('user_id', auth()->user()->id)->get();
        $getMenu = M_Menu::orderBy('created_at', 'desc')->limit(12)->get();
        $merchantTerdekat = User::where('distance', '<=', 20)->get();
        $menuTerdekat = M_Menu::whereIn('user_id', $merchantTerdekat->pluck('id'))->get();
        return view ('page.customers.menu', compact('getMenu', 'menuTerdekat', 'getCart'));
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
        //
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
