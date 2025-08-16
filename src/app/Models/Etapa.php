<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    public $timestamps = true;
    protected $fillable = [ 
        "descricao",
        "frete_id"
    ];
}
