<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'pid';
    protected $fillable = [
        'id'
       ,'image' 
       ,'caption'
       ,
   ];

    public function user()
    {
        return $this->belongsTo(\App\User::class,'id');
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
