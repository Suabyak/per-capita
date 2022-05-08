<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderpageController extends Controller
{
    public function index() {
      $title = " - Zamów";
        return view('orderpage.orderpage', ['title' => $title]);
      }
}
