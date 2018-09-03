<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Carbon\Carbon;

class Model extends Eloquent
{
    // // Currently all input is accepted.
    // protected $guarded = [];

    // // Converts created_at to a nice format.
    // public function getCreatedAtAttribute($date)
    // {
    //     return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('l jS F');
    // }
    
    // // Returns converted created_at format.
    // public function getUpdatedAtAttribute($date)
    // {
    //     return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    // }
}
