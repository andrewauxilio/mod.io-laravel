<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mod extends Model
{
    use HasFactory;

    /**
     * the fillable attributes
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'url',
    ];

    // TODO: implement challenge 2.0
}
