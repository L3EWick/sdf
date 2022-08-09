<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = "eventos";
    protected $fillable = [
     'id',
     'descricao',
     'nome'
     
    ];

    public function eventos_images(){

        return $this->hasMany('App\Models\Eventos_Images');
    
        }
    
}
