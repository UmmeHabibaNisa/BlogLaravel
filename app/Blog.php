<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'user_id','description','image'
    ];

    public function blog(){

        return $this->belongsTo('App\Category');

    }
}
