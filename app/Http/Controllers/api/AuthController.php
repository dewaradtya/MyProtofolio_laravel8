<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = User::all();

        return response()->json([
            'message' => 'Data user berhasil ditemukan',
            'data' => $query,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request->input('password'));
    
        $query = User::create($input);
    
        return response()->json([
            'message' => 'Data user berhasil ditambahkan',
            'data' => $query,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = User::find($id);

        return response()->json([
            'message' => 'Data user berhasil ditemukan',
            'data' => $query,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user,)
    {
        // $user = User::find($id);

        $user->name = $request->name; 
        $user->email = $request->email; 
        $user->password = bcrypt($request->password); 
        $user->save();
    
        return response()->json([
            'message' => 'Data user berhasil diupdate',
            'data' => $user,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return response()->json([
            'message' => 'Data user berhasil dihapus',
        ], 200);
    }
}
