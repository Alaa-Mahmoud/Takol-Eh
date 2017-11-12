<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  protected $fillable =['path', 'title','description' , 'price'];
    public  function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
}
