<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUser;
use App\Models\User;

class UserController extends Controller
{
    public function showUsers($id)
    {
        // $hello = 'hello, how are you';
        // return view('home', compact('hello'));

        //from database
        // $users = User::get();

        // // dd($users);
        // return view('home', compact('users'));

        // $user = User::where('email', 'johndoe@mail.com')->first();

        // $user = User::findOrFail(2);
        // $user = user::where('fname', 'john')->get();
        // dd($user);
        $user = User::findOrFail($id);
        return view('home', compact('user'));

    }

    public function createUser()
    {
        return view('createuser');
    }

    public function saveUser(CreateUser $request)
    {

       
        $user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->back()->with('success', 'User has been added successfully');

    }
} 