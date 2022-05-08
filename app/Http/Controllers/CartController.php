<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

  public function index()
  {
    return view('orderpage.cart');
  }

  public function store(Request $request)
  {
    return redirect()->route('orderpage');
  }
}
