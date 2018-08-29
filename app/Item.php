<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'itemName', 'itemQuantity', 'itemType', 'itemCatagory', 'itemUnit',
    ];
}
