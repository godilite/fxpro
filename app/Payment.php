<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
   protected $fillable=['plan_id','user_id','firstName','lastName'];
   
  
  public function user()
  {
      return $this->belongsTo('App\User');
  }
   //
}
