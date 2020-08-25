<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ProfileController extends Controller
{

    public function index()
    {
        $users = User::all()->toArray();
        
        return view('profiles.userlist',compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('profiles.profile', compact('user'));
    }

    public function edit(User $user)
    {
         return view('profiles.profileedit', compact('user'));
    }

    public function update(Request $request, $id)
    {
         $users = User::find($id);
        $users->name = request('name');
        $users->avatar = request('avatar');
        $users->age = request('age');
        $users->birthday = request('birthday');
        $users->address = request('address');
        $users->phone = request('telephone');
        $users->password = request('password');
        $users->save();
        return redirect()->back();
    }
}
