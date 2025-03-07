<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    protected $fillable = [
        'name',
    ];

    abstract public function calculateArea();
}
