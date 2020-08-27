<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // IMPORTANT!
    }

    public function index()
    {
        $users = User::all()->toArray();
        
        return view('profiles.index',compact('users'));
    }

    public function show(User $user)
    {
        //$user = User::findOrFail($user);
    
        return view('profiles.show', compact('user'));
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

        return view('profiles.edit', compact('user'));
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

        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filepath = $file->storeAs('avatars', $filename);
            Image::make($file)->resize(300, 300)->save($filepath);
            $users->avatar = $filepath;
        }

        $users->save();

        return back();
    }

    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();

        return back();
    }
}
