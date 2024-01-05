<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends AbstractModelDefault
{

    protected $fillable =
        [
        'name',
        'description',
        'category',
        'price',
        'quantity',
        'image_link',
        'specifications',
        'discount'
        ];
}
