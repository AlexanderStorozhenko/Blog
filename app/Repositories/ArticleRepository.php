<?php

namespace App\Repositories;

use App\Article;
use Illuminate\Support\Collection;

class ArticleRepository
{
    public function getArticleById($id)
    {
        $data = Article::select("*")
            ->where(['id' => $id])
            ->toBase()
            ->get()
            ->first();

        if (empty($data->content))
            $data->content = parsedown($data->raw_content);

        return $data;
    }

    /** @return Collection * */
    public function getAll()
    {
        return Article::select("*")
            ->limit(100)
            ->toBase()
            ->get();
    }

    /**
     * @param $sort
     * @return Collection
     */
    public function getAllSorted($sort)
    {
        $sort = in_array($sort, ["name", "id"]) ? $sort : "name";

        return Article::select("*")
            ->orderBy($sort)
            ->limit(100)
            ->toBase()
            ->get();
    }

    public function getNewId()
    {
        return Article::max("id") + 1;
    }

    public function getLike($like)
    {
        return Article::select("*")
            ->where("name","like","%$like%")
            ->limit(100)
            ->toBase()
            ->get();
    }
}
