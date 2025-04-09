<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'descripcion',
        'precio',
        'cantidad',
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }

}
