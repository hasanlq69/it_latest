<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::OrderBy('id', )->get();
        return view('itdesk.user.user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('itdesk.user.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $us = New User;
        $us->name = $request['name'];
        $us->fullname = $request['fullname'];
        $us->email = $request['email'];
        $pass = $request['password'];
        $us->password = bcrypt($pass);
        $us->passback = $pass;
        $us->level = $request['level'];
        $us->save();

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function akun($id)
    {
        // $iduser = Auth::User()->id;
        $user = User::where('id', $id)->first();

        return view('itdesk.user.akun',compact('user'));
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
        $us = User::where('id', $id)->first();
        $us->name = $request['name'];
        $us->fullname = $request['fullname'];
        $us->email = $request['email'];
        $pass = $request['password'];
        $us->password = bcrypt($pass);
        $us->passback = $pass;
        $us->level = $request['level'];
        $us->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
