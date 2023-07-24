<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Wecomemodel;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{ 
    public function insert_from(request $request){
         $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
         $imageName = time().'.'.$request->file('filename')->extension();
         $request->file('filename')->move(public_path('filename'), $imageName);
         Wecomemodel::Create([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
            'filename' => $imageName,
         ]);
         return back()
         ->with('success','User created successfully.')
         ->with('image',$imageName); 
    } 
}
 