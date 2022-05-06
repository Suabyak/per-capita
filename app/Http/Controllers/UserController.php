<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(UserRepository $userRepo, $id) {
        $user = $userRepo->find($id);

        return view('userpage.userpage', ["user"=>$user]);
    }

    public function store(Request $request) {
        $user = new User;

        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));


        $user->save();
        return redirect()->route('login');
    }

    public function edit(UserRepository $userRepo) {
        $id = Auth::id();
        $user = $userRepo->find($id);


        return view('userpage.userpage', [
            "user" => $user,
        ]);
    }

    public function editStore(Request $request) {

        $user = User::find($request->input('id'));


        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->city = $request->input('city');
        $user->street = $request->input('street');
        $user->zip = $request->input('zip');

        $user->save();

        return view('userpage.userpage', [
            "user" => $user,
        ]);
    }
}
