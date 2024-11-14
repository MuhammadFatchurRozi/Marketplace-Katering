<?php

namespace App\Http\Controllers\web\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Call model
use App\Models\merchant\M_Menu;
use App\Models\customers\C_Cart;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check()) {
            $getCart = C_Cart::with('menu')->where('user_id', auth()->user()->id)->get();
        }
        $getCart = [];
        // dd($relationshipCart);
        $getMenu = M_Menu::orderBy('created_at', 'desc')->limit(12)->get();
        // $getCartMenu = M_Menu::whereIn('id', $getCart->pluck('menu_id'))->get();
        return view ('page.customers.index',compact(
            'getCart', 
            'getMenu'
        ));
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
