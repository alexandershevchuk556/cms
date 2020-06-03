<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {

        $var = 'Hello world!';

        return view('welcome', compact('var'));
    }
}
