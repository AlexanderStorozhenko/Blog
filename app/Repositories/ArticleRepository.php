<?php
namespace App\Repositories;

use App\Article;
use Illuminate\Support\Collection;

class ArticleRepository {

    public function getArticleById($id){
        $data = Article::select("*")
            ->where(['id'=>$id])
            ->toBase()
            ->get()
            ->first();

        if(empty($data->content))
            $data->content = parsedown($data->raw_content);

        return $data;
    }
    public function getArticleContentById($id){

    }
    /** @return Collection **/
    public function getAllArticles(){
        return Article::select("*")->toBase()->get();
    }
//    public function get($data){
//        return Article::insert($data)->toBase()->get();
//    }

}
