<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    protected function index()
    {
        $data['articles'] = Article::orderBy('created_at', 'desc')->paginate(5);
        return view('article.news',$data);
    }
}