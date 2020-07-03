<?php

namespace App\Http\Controllers;

use App\Article;
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
        $id = $this->articleRepository->getNewId();
        return view("admin.editor", compact('id','title'));
    }
    public function change($id)
    {
        $title = "Редактор статьи";
        $article = $this->articleRepository->getArticleById($id);
        $raw = $article->raw_content;
        $content = $article->content;
        $article_title = $article->name;
        $article_text = $article->text;
        $id = $article->id;
        return view("admin.editor", compact('title',
            'article_title',
            'article_text','id','raw','content'));
    }


    //post
    public function save(EditorRequest $request)
    {
        $raw = $request->input("raw");
        $name = $request->input("title");
        $text = $request->input("text");
        $id = $request->input("id");
      if(isset($raw))
          (new Article)->Add($id,$name,$raw,$text);
        return json_encode(['success'=>true]);
    }
    //post
    public function refresh(EditorRequest $request)
    {
        $raw = $request->input('raw');

        $content = parsedown($raw);
        return json_encode(['raw'=>'','content'=>$content]);
    }
}
