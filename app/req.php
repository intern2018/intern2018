<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class req extends Model
{
    protected $fillable = [
        'userId', 'status', 'itemId', 'quantity', 'unit',
    ];
}
