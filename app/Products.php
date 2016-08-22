<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
         'productName', 'description','price','Image' ];
    protected $table = 'products';
}
