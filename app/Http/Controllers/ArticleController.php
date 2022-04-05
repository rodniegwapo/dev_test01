<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function validateArticle()
    {
        # code...

        return request()->validate([
                    'title' => 'required|max:255',
                    'body' => 'required',
                ]);
        
    }
    public function createArticle () {
        
        return view('article.create');
    }
    public function displayArticle(){
        $article  = Article::with('user')->get();
        return view('home',['articles' => $article]);
    }
    public function storeArticle(Request $request){
        $article = new Article($this->validateArticle());
        $article->user_id = Auth::id();
        $article->save();
        return $this->displayArticle();
    }
    public function destroy($id) {
        $article =  Article::find($id);
        $article->delete();
        return $this->displayArticle();
    }
    public function edit($id){
        $article =  Article::find($id);
        return view('article.update',['article' => $article]);
    }
    public function show($id){
        $article =  Article::with('user')->find($id);
        return view('article.show',['article' => $article]);
    }
    public function update($id) {
        DB::table('articles') -> 
            where('id', $id ) ->
            update(['title' => request('title'), 'body' => request('body')]);

            return redirect ('/home');
    }
}
