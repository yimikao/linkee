<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function edit()
    {
        return view('users.edit', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {   
        Auth::user()->update($request->only(['username']));

        return redirect()->back()->with([
            'success' => 'Changes saved successfully.'
        ]);
    }

    public function show(User $user)
    {
        $user->load('links');//so that i can access $user->links in the view
        //this can also be done another way(using adding 'links' => Link::where('user_id', $user->id)->get())
        //to context and then go on to acess ($links as $link) in view

        return view('users.show', [
            'user' => $user
        ]);
    }

    
}
