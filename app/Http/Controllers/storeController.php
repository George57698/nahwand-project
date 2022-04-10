<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storeController extends Controller
{
     public function index()
    {
        return view('store');
    }

    public function single_instrument()
    {
        return view('single_instrument');
    }  

    public function book_instrument()
    {
        return redirect('home');
    }
}
