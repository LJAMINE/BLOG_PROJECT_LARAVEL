<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
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
            'title' => 'required|string|min:5|max:255',
            'content' => 'required|string|min:5|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'status' => 'unpublished',
            'user_id' => Auth::id(),
            'category_id' => $request->category_id
        ]);


        return redirect()->route('articles.index')->with('success','article created');
    }

    public function destroy(Article $article)
    {

        $article->delete();
        return redirect()->route('articles.index')->with('success','article deleted');;
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        return view('articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);
        $article=Article::findOrFail($id);
        $article->title=$request->title;
        $article->content=$request->content;
        $article->category_id=$request->category_id;

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article updated successfully!');

    }
}
