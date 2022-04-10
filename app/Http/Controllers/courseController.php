<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class courseController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('courses');
    }

    public function add()
    {
        return view('add-course');
    }
    public function add_new()
    {
        return redirect('/home');
    }
}  
