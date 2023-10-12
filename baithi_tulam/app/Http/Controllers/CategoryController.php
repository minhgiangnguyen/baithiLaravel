<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        return view('category/index');
    }

    function addCategory(){
        return view('category/addNew');
    }
}
