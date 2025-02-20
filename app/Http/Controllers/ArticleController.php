<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('articles.index', ['articles' => $articles]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'status' => 'unpublished',
            'user_id' => Auth::id(),
            'category_id' => $request->category_id
        ]);


        return redirect()->route('articles.index');
    }
}
