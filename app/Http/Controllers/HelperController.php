<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HelperController extends Controller
{
    public function index()
    {
        $name = greeting("xxx");
        return view('helper/helper', ['hello' => $name]);
    }
}
