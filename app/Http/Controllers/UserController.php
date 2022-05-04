<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request) {
        $user = new User;

        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));


        $user->save();
        return view('userpage.userpage');
    }
}
