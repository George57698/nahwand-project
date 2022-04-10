<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
  
    public function note()
    {
        return view('dashnote');
    }
    
    public function teacher()
    {
        return view('dashboard');
    }
}
