<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articles = [
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


    public function store (Request $request){
      
        Article::create($request->all());

        return redirect()->route('articles.index');
    }




    public function saveToDatabase(){
        

    }
}