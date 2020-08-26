<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Image;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // IMPORTANT!
    }

    public function index()
    {
        $users = User::all()->toArray();
        
        return view('profiles.userlist',compact('users'));
    }

    public function show(User $user)
    {
        //$user = User::findOrFail($id);
    
        return view('profiles.profile', compact('user'));
    }

    public function showAvatar($id)
    {
        $user = User::findOrFail($id);
        $filepath = storage_path('app/' . $user->avatar);

        return response()->file($filepath);
    }

    public function edit(User $user)
    {
        //$user = User::findOrFail($id);

        return view('profiles.profileedit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = request('name');
        $users->sex = request('sex');
        $users->age = request('age');
        $users->birthday = request('birthday');
        $users->address = request('address');
        $users->telephone = request('telephone');
        $users->password = request('password');

        if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            //Image::make($avatar)->resize(100,100)->save(public_path("/app/avatars/" .$filename));
            $file->move('avatars', $filename);
            $users->avatar = $filename;
        }
        $users->save();

        return back();
    }

    public function destroy(Request $request,$id)
    {
        $user = User::find($id);
        $user->delete();

        return back();
    }
}
