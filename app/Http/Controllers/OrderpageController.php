<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class OrderpageController extends Controller
{
    public function index() {
      $title = " - Zamów";
      $products =  Product::all();
        return view('orderpage.orderpage', compact('title', 'products'));
      }
}
