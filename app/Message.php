<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'message',
    ];
    //userと一対多
    public function user(){
        return $this->belongsTo('App\User');
    }
}
