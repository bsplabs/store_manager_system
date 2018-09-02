<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $table = 'payment';

  public function invoice(){
      return $this->hasOne('App\Invoice');
  }

  public function bill(){
      return $this->belongsTo('App\Bill');
  }


}
