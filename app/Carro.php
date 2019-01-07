<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = [
        'placa','orgao', 'url', 'descricao', 'dataEhora', 'status'
    ];
    
    public $timestamps = false;

    public function comments(){
        return $this->hasMany('App\Comment');

}
}