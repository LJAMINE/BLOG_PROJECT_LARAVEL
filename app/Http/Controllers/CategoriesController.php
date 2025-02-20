<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories=Category::orderBy('created_at','desc')->get();
        return view('articles.form',['categories'=>$categories]);
    }}
