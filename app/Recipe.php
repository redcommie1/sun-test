<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name','prev_img', 'full_img', 'number_servings', 'time', 'difficulty', 'ingredients', 'description','advise',
    ];
}
