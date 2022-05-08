<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;

class CartController extends Controller
{

  public function index()
  {
    //dd(Cart::content());
    return view('orderpage.cart');
  }

  public function store(Request $request)
  {
    $product = Product::findOrFail($request->input('id'));

    Cart::add($product->id, $product->name, 1, $product->price);

    return redirect()->route('orderpage');
  }
}
