<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function store(Request $request){
        $title = $request->title;
        $description = $request->description;
        $price = $request->price;
        $img = $request->file('img')->store('public/img');

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
