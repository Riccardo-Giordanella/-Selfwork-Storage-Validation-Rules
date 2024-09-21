<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class FormController extends Controller
{

    public function store(ArticleRequest $request){
        $title = $request->title;
        $description = $request->description;
        $price = $request->price;
        $img = null;

        if($request->file('img')){
            $img = $request->file('img')->store('img', 'public');
        }

        Article::create([
            'title' => $title,
            'description' => $description,
            'price' => $price,
            'img' => $img,
        ]);

        return redirect()->back()->with('message', 'Articolo inserito correttamente, verifica che sia presente nella pagina "I nostri articoli"');


    }

    public function article(){
        $articles = Article::all();
        return view('article', ['articles' => $articles]);
    }
}
