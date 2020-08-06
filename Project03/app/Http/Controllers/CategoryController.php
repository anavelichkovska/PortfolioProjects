<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        $category = Category::all();
        return view('create', compact("category"));
    }
}
