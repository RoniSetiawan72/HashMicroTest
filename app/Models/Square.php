<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Square extends Model
{
    protected $fillable = ['name', 'side_length'];

    public function calculateArea()
    {
        return $this->side_length * $this->side_length;
    }
}
