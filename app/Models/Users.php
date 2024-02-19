<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
   // use HasFactory;
   public $timestamps = false;

   protected $table = 'user';
   public function posts()
   {
       return $this->hasMany('App\Models\Posts', 'post_user', 'user_id');
   }
}
