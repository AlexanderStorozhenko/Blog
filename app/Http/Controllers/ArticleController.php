<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
class ArticleController extends Controller
{
    private $articleRepository;
    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
    }

    public function index()
    {
        $articleList = $this->articleRepository->getAllArticles();

        return view('articles',compact('articleList'));
    }

    public function article($id)
    {
        $content = $this->articleRepository
            ->getArticleContentById($id)
            ->content;

        return view('article',compact('content'));
    }
}
