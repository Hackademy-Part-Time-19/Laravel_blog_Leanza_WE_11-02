<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
/*     private $articles = [
        1 => [
            'title' => 'How to be a programmer',
            'content' => 'This is a guide on how to be a programmer',
            'author' => 'John Doe', 
        ],
        2 => [
            'title' => 'How to be a football player',
            'content' => 'This is a guide on how to be a football player',
            'author' => 'Jane Smith',
        ],
        3 => [
            'title' => 'How to be a basketball player',
            'content' => 'This is a guide on how to be a basketball player',
            'author' => 'Mary Cross',
        ]
    ];
 */

    public function home(){
        return view('home');
    }

    public function index(){
        $articles = Article::all();
      
        return view('articles-index', ['articles' => $articles]);
    }

    public function vaiAForm(){
        return view('form');
    }


    public function store (StoreArticleRequest $request){
       /*  dd($request->validated()); */
        Article::create($request->validated());
        return redirect()->back()->with('success', 'Articolo creato con successo');
    }

    public function edit($id){
        $article = Article::find($id);
        return view('form-edit', ['article' => $article]);
    }

    public function update(StoreArticleRequest $request, $id){
        /* dd($request->validated()); */
        $article = Article::find($id);
        $article->update($request->validated());
        return redirect()->back()->with('success', 'Articolo modificato con successo');
    }

    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return redirect()->back()->with('success', 'Articolo eliminato con successo');
    }

    public function byCategory ($categoryId){
        $category = Category::find($categoryId);
        $articles = $category->articles;
       
        return view('articles-index', ['articles' => $articles]);
    }

}