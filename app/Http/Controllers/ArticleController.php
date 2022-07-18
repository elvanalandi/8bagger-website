<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Testimoni;
use Session;

class ArticleController extends Controller
{
    public function getBlog(){
        $articles = Article::orderBy('date','DESC')->paginate(3);
        foreach ($articles as $article) {
            $newDateTime = date('d-m-Y <\b\r> h:i A', strtotime($article->date));
            $article->date = $newDateTime;
        }
        return view('article.index',compact('articles'));
    }

    public function getBlogType(Request $request){
        $articles = Article::where('type',$request->type)->orderBy('date','DESC')->paginate(3);
        foreach ($articles as $article) {
            $newDateTime = date('d-m-Y <\b\r> h:i A', strtotime($article->date));
            $article->date = $newDateTime;
        }
        return view('article.index',compact('articles'));
    }

    public static function getDetailBlog($id){
        Session::put('id', $id);
        $articles = Article::find($id);
        $newDateTime = date('d-m-Y <\b\r> h:i A', strtotime($articles->date));
        $articles->date = $newDateTime;
        return view('article.detail',compact('articles'));
    }

    public function getLatestBlog(){
        $articles = Article::orderBy('date','DESC')->get();
        return view('index',compact('articles'))->with('images', Testimoni::all());
    }
}
