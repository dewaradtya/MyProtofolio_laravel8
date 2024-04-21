<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projek = Projek::all();
        return view('projek.index', ['projek' => $projek]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projek = Projek::all();
        return view('projek.create', ['projek' => $projek]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projek = new Projek(); 

        $rules = [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'link' => 'required',
            'image' => 'required|image',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal memasukkan data',
                'data' => $validator->errors()
            ], 400);
        }

        $projek->title = $request->title;
        $projek->content = $request->content;
        $projek->link = $request->link;
        $projek->slug = Str::slug($request->title); 
        $projek->views = 0; 
        $projek->is_active = $request->is_active;

        // Handling image upload
        if ($request->hasFile('image')) { 
            $image = $request->file('image'); 
            $imageName = $image->getClientOriginalName(); 
            $image->move('img/projek/', $imageName); 
            $projek->image = $imageName;
        }

        $projek->save(); 

        return redirect('projek')->with('success', 'Projek berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projek = Projek::find($id);
        return view('projek.show', ['projek' => $projek]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projek = Projek::find($id);
        return view('projek.edit', ['projek' => $projek]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projek = Projek::findOrFail($id);

        $rules = [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'link' => 'required',
            'image' => 'nullable|image|',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal memasukkan data',
                'data' => $validator->errors()
            ], 400);
        }

        $projek->title = $request->title;
        $projek->content = $request->content;
        $projek['slug'] = Str::slug($request->title);
        $projek['views'] = 0;
        $projek->is_active = $request->is_active;

        // Handling file upload
        if ($request->hasFile('image')) {
            // Hapus file lama jika ada
            if ($projek->file) {
                unlink('img/projek/' . $projek->file);
            }
            // Simpan file baru
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move('img/projek/', $fileName);
            $projek->file = $fileName;
        }

        $projek->save();

        return redirect('projek')->with('success', 'Artikel berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projek = Projek::find($id);
        if (empty($projek)) {
            return response()->json([
                'status' => false,
                'data' => 'Data tidak ditemukan'
            ], 404);
        }

        $projek->delete();

        return redirect('projek')->with('success', 'Artikel berhasil dihapus');
    }
}
