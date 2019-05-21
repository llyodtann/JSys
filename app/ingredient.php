<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    // protected $primaryKey = ['si_num', 'ingredient_name']; // or null
    protected $primaryKey = 'ingredient_name';
    public $incrementing = false;
}
