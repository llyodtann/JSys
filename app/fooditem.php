<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    protected $primaryKey = ['s_num', 'dish_name']; // or null

    public $incrementing = false;
}
