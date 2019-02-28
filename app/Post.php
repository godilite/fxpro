<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
  use SoftDeletes;

  public function category()
  {
    return $this->belongsTo('App\Category');  # code...
  }  //

  
  public function user()
  {
      return $this->belongsTo('App\User');
  }
  
    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'title', 'content', 'category_id','featured', 'slug', 'user_id' 
  ];
  public function getFeaturedAttribute($featured)
  {
   return asset($featured);# code...
  }
  protected $dates = ['deleted_at'];
}

