<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Etapa extends Model
{
    public $timestamps = true;
    protected $fillable = [ 
        "descricao",
        "frete_id"
    ];

    public function frete(): BelongsTo
    {
        return $this->belongsTo(Frete::class);
    }
}
