<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderpageController extends Controller
{
    public function index() {
        return view('orderpage.orderpage', ["title" => "Zamów"]);
    }
}
