<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
 protected $table = 'items';
 protected $fillable = ['name','category_name','price'];

}
