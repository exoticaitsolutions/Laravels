<?php

namespace App\Http\Controllers;
use App\Models\Customusermodel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CustomuserController extends Controller
{ 
    public function insert_data(Request $request){
       // dd('hello');
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'gender' => 'required',
            'city' => 'required',
            'text_area' => 'required',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->file('filename')->extension();
        $request->file('filename')->move(public_path('filename'), $imageName);
        Customusermodel::create([
            'name'=> $request->name,
            'email' => $request ->email,
            'password'=> $request->password,
            'gender'=> $request ->gender,
            'city' => $request->city,
            'text_area' =>$request->text_area,
            'filename' =>$imageName,

        ]);
        return back()
            ->with('success','User created successfully.')
            ->with('image',$imageName); 

    }
    public function show(){
      // $all_entries = Customusermodel::all()->toArray();
       $all_entries = Customusermodel::all()->toArray(); 
      //return view('home', compact('users'));
      return view('home', ['all_entries' => $all_entries]);

    }
    public function delete($id){
        //echo 'delete';
        //$id= $_GET['id'];
        $user_delete =  Customusermodel::find($id);
        $user_delete->delete();
        return back()->with('success', 'User deleted successfully');

    }
    public function edit($id){
        echo 'edit';
       //$id= $_GET['id'];
       $userss = Customusermodel::find($id);
       print_r($userss);
       return view('edit', ['userss' => $userss]);
    }
}
