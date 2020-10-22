<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('welcome', ['categories' => $categories]);
    }
}
