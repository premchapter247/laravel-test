<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class UserController extends Controller
{
  function index(){
    return view('test');
  }
  function user(Request $request ){
   // dd($request->first_name);
    $validated = $request->validate([
      'first_name' => 'required|min:255',
      'last_name' => 'required|min:255',
      'email' => 'required|unique:users|max:255',
      'password' => 'required|confirmed|min:8',
      'gender' => 'required',
      'phone' => 'required|numeric',
      'question' => 'required',
      'answer' => 'required|min:10',
    ]);
    if($validated->fails()){
      return redirect('/register')
                ->withErrors($validator)
                ->withInput();
    }else{

    }
    return view('test');
  }
}