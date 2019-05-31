<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(Request $request){
        return view('home');
    }

    public function download(Request $request){
        return view('download');
    }

    public function memorandum(Request $request){
        return view('memorandum');
    }
}
