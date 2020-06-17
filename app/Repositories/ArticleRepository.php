<?php
namespace App\Repositories;

use App\Article;
use Illuminate\Support\Collection;

class ArticleRepository {

    public function getArticleContentById($id){
        return Article::select("*");
    }
    /** @return Collection **/
    public function getAllArticles(){
        return Article::select("*")->toBase()->get();
    }

}
