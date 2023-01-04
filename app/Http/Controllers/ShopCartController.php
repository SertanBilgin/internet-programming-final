<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopCartController extends Controller
{
    public function index()
    {
        $Contact = "asd";

        return view('Pages\Shop-cart', compact('Contact'));
    }
}
