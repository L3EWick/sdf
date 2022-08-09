<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventos_Images extends Model
{
    protected $table = "eventos_images";
    protected $fillable = [
     'image',
     'eventos_id'
    ];
    public function eventos(){

        return $this->belongsToMany('App\Models\Eventos');
    
        }
}
