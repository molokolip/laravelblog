<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Auth;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $articles = Article::all();
        $userID = auth()->user()->id;
        $articles = Article::where("user_id", Auth::id())->paginate(1);
       return view('articles.index')->with('articles', $articles,);
        // dd($articles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>['required'],
            'text'=>['required']]);
    
            $article = new Article([
                'user_id' => Auth::id(),
                'title'=> $request->title,
                'body'=> $request->text
                ]);
            $article->save();
            return to_route('articles.index');
    
        }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
       $article = Article::where('id', $id)->first(); 
       return view ('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
        //$article = Article::where('id')->first(); 
        return view ('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $artilce)
    {
        //
        $artilce->delete();
        return to_route('articles.index');
    }
}
