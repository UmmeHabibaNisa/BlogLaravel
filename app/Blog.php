<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'user_id','description','images','tags', 'image'
    ];

    protected $casts = [
         'tags' => 'array', 'gallery' => 'array'

    ];


    public function cat(){
        return $this->belongsTo(Category::class,'category','id');

    }
}
