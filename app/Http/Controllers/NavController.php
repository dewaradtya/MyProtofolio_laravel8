<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Models\Projek;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        $projek = Projek::paginate(8);
        return view('about', ['projek' => $projek]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function detail($id)
    {
        $projek = Projek::find($id);
        return view('detailProjek', ['projek' => $projek]);
    }

    public function daftar(PostRequest $request)
    {
        $dataKirim = $request->all();

        return view('hasil')->with(['data' => $dataKirim]);
    }
}
