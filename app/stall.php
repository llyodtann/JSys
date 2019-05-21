<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stall extends Model
{
    // protected $primaryKey = ['si_num', 'ingredient_name']; // or null
    protected $primaryKey = 'stall_num';
    public $incrementing = false;
}
