<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'user_id', 'carro_id'];
 
    public function carro()
    {
      return $this->belongsTo('App\Carros');
    }
   
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
