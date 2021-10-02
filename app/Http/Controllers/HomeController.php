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

    public function stations(Request $request){
        return view('stations');
    }

    public function bulletins(Request $request){
        return view('bulletins');
    }

    public function news(Request $request){
        return view('news');
    }

    public function publications(Request $request){
        return view('publications');
    }
}
