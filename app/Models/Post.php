<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'message'];

    /**
  * Get the created at timestamp.
   */
    // public function getCreatedAtAttribute($value)
    // {
    //     return \Carbon\Carbon::parse($value);
    // }

    // /**
    //  * Get the updated at timestamp.
    //  */
    // public function getUpdatedAtAttribute($value)
    // {
    //     return \Carbon\Carbon::parse($value);
    // }
}
