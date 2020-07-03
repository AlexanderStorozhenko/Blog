<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\ArticleSearchRequest;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    private $articleRepository;
    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
    }

    public function index(Request $request)
    {
        $sort = $request->input("sort") ?? "name";
        $articleList = $this->articleRepository->getAllSorted($sort);

        return view('articles',compact('articleList'));
    }



    public function article($id)
    {
        $content = $this->articleRepository
            ->getArticleById($id)
            ->raw_content;

        return view('article',compact('content'));
    }


    public function search(ArticleSearchRequest $request)
    {
        if(!$request->validated())
            return back(302)
                ->withErrors($request->validationData());

        $query = $request->input('q');
        $q = $request->old('q');
        $articleList = $this->articleRepository->getLike($query);

        return view('articles',compact('articleList', 'q'));
    }

}
