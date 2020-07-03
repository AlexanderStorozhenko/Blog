<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    public function Add($id,$name, $raw, $description)
    {
        $exists = $this->select('id')
                ->where('id',$id)
                ->toBase()->count() > 0;

        if ($exists)
            $this->where("id",$id)
                ->update([
                "name" => $name,
                "raw_content" => $raw,
                "content" => "",
                "text" => $description]);

        else
            $this->insert(["name" => $name,
                "raw_content" => $raw,
                "content" => "",
                "text" => $description
            ]);
    }
}
