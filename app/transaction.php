<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    // protected $primaryKey = ['si_num', 'ingredient_name']; // or null
    protected $primaryKey = 'transaction_number';
    public $incrementing = false;
}
