<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class profileController extends Controller
{ 

    
    public function showProfile($id)
    { 
        $profile = User::find($id);

        return view('profile')->with('profile',$profile);
    }

    public function editProfile($id)
    {
        $profile = User::find($id);
        return view('profileEdit', compact('profile'));
    }

    
    public function updateProfile(Request $request)
    {
     
        $profileUp =User::find(auth()->user()->id);
        $profileUp->name = $request->input('name');
        $profileUp->email = $request->input('email');
        $profileUp->password=bcrypt($request->input('password'));
        $profileUp->update();
        return redirect()->back();
    }
    

}