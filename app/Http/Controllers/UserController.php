<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

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

          switch ($request->input('type')) {
            case 'delete':
              $user=User::find($request->input('id'));
              $user->delete();
              return redirect()->route('home')->with('message', 'Konto zostało usunięte.');
              break;
            case 'store':
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
              break;
          }

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

    public function checkout()
    {
      return view('orderpage.ordercheckout', ['user' => User::find(Auth::id())]);
    }

    public function checkoutAddress(Request $request)
    {
      Cart::destroy();
      return redirect()->route('home')->with('message', 'Zamówienie zostało przyjęte do realizacji.');
    }


    public function deleteUser(Request $request) {
        dd($request);
        $user = User::delete($request->input('id'));

        return "";
    }
}
