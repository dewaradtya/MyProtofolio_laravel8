<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Http\Requests\PostRequest;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
    return view('about');
    }
    public function contact()
    {
    return view('contact');
    }

    public function daftar(PostRequest $request)
    { 
        $dataKirim = $request->all();

        return view('hasil')->with(['data' => $dataKirim]);
    }


}