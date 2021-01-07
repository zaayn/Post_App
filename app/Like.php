<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'like';
    protected $primaryKey = 'lid';
    protected $fillable = [
        'pid'
       ,
   ];

   public function post()
   {
       return $this->belongsTo(\App\Post::class,'pid');
   }
   public function user()
   {
       return $this->belongsTo(\App\User::class,'id');
   }
}
