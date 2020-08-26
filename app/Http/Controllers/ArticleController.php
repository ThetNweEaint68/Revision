<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticleController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth'); // IMPORTANT!
    }

    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles'=>$articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        request()->validate(
            [
                'title' => 'required',
                'body' => 'required'
            ]
        );

        $article = new Article();
        $article->title = request('title');
        $article->body = request('body');
        $article->fill($request->all());
        $request->user()->articles()->save($article);

        return redirect('/articles');
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article'=> $article]);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
                'title'=>'required',
                'body'=>'required'
            ]
        );

        $article = Article::find($id);
        $article->title = request('title');
        $article->body = request('body');
        
        $request->user()->articles()->save($article);

        return redirect('/articles');
    }  

}
