<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $table = 'item';

  public function product(){
      return $this->belongsToMany('App\Product');
  }

  public function invoice(){
      return $this->belongsToMany('App\Invoice');
  }
}
