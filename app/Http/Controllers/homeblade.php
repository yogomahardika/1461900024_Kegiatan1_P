<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeblade extends Controller
{
    public function index(){
        return view('home');
    }
    public function artikel(){
        return view('artikel');
    }
    public function contact(){
        return view('contact');
    }
}