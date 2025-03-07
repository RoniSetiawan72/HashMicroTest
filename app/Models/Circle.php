<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    protected $fillable = ['name', 'radius'];

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
