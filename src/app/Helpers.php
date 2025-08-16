<?php

namespace App;

use App\Models\Frete;
use Illuminate\Support\Str;

class Helpers
{
    public static function generateTrackingCode(): string
    {
        do{

            $code = Str::upper(Str::random(8));

            $exists = Frete::where('codigo_rastreamento', $code)->exists();

        }while($exists);

        return $code;
    }
}