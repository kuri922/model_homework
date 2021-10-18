<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
 protected $table = 'items';

protected $guarded = array('id');


public function getData()
 {
$data = DB::table($this->table)->get();

 return $data;
}
}
