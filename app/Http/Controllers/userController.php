<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\DB;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $user = DB::table('users')->get();
      return view('allusers',compact($user));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user =DB::table('users')->get();
        return view('showUser',$user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=DB::table('users')->insert([
            'mopile'=>$request->mopile,
            'address'=>$request->address 
        ]);

        return redirect()->route('all.users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user =DB::table('users')->where('id',$id)->first();
        return  redirect()->route('create');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=DB::table('users')->where('id',$id)->update([
            'mopile'=>$request->mopile,
            'address'=>$request->address 
        ]);
        return  redirect()->route('all.users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=DB::table('users')->where('id',$id)->delete();
        return  redirect()->route('all.users');
    }
}
