<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User ;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('welcome') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('user.edit') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $user = User::where('username',$name)->first() ;
        return view('user.display',compact('user')) ;
    }

    public function edit($name) {
        $user = User::where('username',$name)->first() ;
        return view('user.edit',compact('user')) ;
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
        $validatedData  = $request->validate([
            'hobby' => 'required',
            'objective' => 'required',
            'quote' => 'required'
        ]);

        $user = User::find($id);
        $user->hobby = $request->input('hobby') ;
        $user->objective = $request->input('objective') ;
        $user->quote = $request->input('quote') ;
        $user->save() ;

        return redirect()->route('user.show',$user->username) ;
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
