<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
  use SoftDeletes;
 protected $table = 'items';
 protected $fillable = ['id','name','category_name','price'];

}
