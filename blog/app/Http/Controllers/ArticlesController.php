<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index(){
        // $articles = Article::paginate(4);
        $articles = Article::orderBy('id','desc')->paginate(3);
        return view('articles.index',['articles' => $articles]);
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Request $request){
        $content = $request->validate([
            'title' => 'required',
            'content' => 'required|min:10'
        ]);

        // auth()->user()->articles()->create($content);
        Article::create($content); // 修正模型类名

        return redirect()->route('root')->with('notice','文章已新增!!');
    }
    public function edit($id){
        // $article = auth()->user()->articles->find($id);
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }
    public function update(Request $request, $id){
        $article = Article::find($id);
        $content = $request->validate([
            'title' => 'required',
            'content' => 'required|min:10'
        ]);
        $article->update($content);
        return redirect()->route('root')->with('notice','文章已更新!!');
    }
    public function show($id){
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }
    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('root')->with('notice','文章已刪除!!');
    }
}
