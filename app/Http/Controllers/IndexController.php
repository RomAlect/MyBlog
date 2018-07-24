<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paper;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller {

    public function home($tab = 'policy') {

        $articles = array();
        $categories = ['policy', 'economics', 'history'];

        foreach ($categories as $category) {
            $articles[$category] = DB::table('articles')->where('category', $category)->get();
        }

        return view('site.index', [
            'articles' => $articles,
            'categories' => $categories,
            'tab' => $tab
        ]);
    }

    public function showArticle($id) {
        $article = DB::table('articles')->where('id', $id)->first();
        $path = asset('articles/' . $article->id . '/' . $article->file_name);
        
        if (file_exists('articles/' . $article->id . '/' . $article->file_name)) {
            $article_content = file_get_contents($path);

            return view('site.article', [
                'article' => $article,
                'article_content' => $article_content
            ]);
        }
        else{
            return view('site.articleNotFound');
        }
    }
    
    public function about($what) {
        $path = asset('info/about'.ucfirst($what).'.html');
        
        if (file_exists('info/about'.ucfirst($what).'.html')) {
            $about = file_get_contents($path);
            
            return view('info.about', [
                'about' => $about
            ]);
        }
        else{
            return view('site.articleNotFound');
        }
    }
    

}
