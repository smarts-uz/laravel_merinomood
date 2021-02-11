<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $fillable = ['product_id', 'index', 'label', 'value'];
}
