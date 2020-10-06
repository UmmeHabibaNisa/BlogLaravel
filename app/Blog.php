<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'user_id','description','images','tags', 'image'
    ];


    public function cat(){
        return $this->belongsTo(Category::class,'category','id');

    }
}
