<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable=['name','age','content'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function favorite_user(){
        return $this->belongsToMany('App\User','user_cats','cat_id','user_id');
    }
}
