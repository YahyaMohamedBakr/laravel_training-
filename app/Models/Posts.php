<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $primaryKey  = 'post_id';
    public function user()
    {
        return $this->belongsTo('App\Models\Users', 'post_user', 'user_id');
    }

}
