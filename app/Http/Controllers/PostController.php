<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Post::all();
        // return $contacts;
        return view('post.index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
        ]);

        $contact = new Post();
        $contact->name = $request->input('name');
        $contact->umur = $request->input('umur');
        $contact->alamat = $request->input('alamat');
        $contact->save();

        return view('hasil',["data"=>$request])->with('success', 'Contact has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $contact = Post::find($id);
        return view('post.show', ['contact' => $contact]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Post::find($id);
        return view('post.edit', ['contact' => $contact]);
    
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
        $request->validate([
            'name' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
        ]);
    
        $contact = Post::find($id);
        $contact->name = $request->input('name');
        $contact->umur = $request->input('umur');
        $contact->alamat = $request->input('alamat');
        $contact->save();
    
        return redirect()->route('contacts.index')->with('success', 'Contact has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Post::find($id);
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact has been deleted successfully');
    }
}
