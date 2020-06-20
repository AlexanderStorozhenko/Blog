<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\EditorRequest;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditorController extends Controller
{
    private $articleRepository;
    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
    }

    public function add()
    {
        $title = "Редактор статьи";
        return view("admin.editor", compact('title'));
    }
    public function change($id)
    {
        $title = "Редактор статьи";
        $article = $this->articleRepository->getArticleById($id);
        $raw = $article->raw_content;
        $content = $article->content;

        return view("admin.editor", compact('title','raw','content'));
    }


    //post
    public function save(EditorRequest $request)
    {

        return "ok";

    }
    //post
    public function refresh(EditorRequest $request)
    {
        $raw = $request->input('raw');

        $content = parsedown($raw);
        return json_encode(['raw'=>'','content'=>$content]);
    }
}
