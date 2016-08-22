<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie_product extends Model
{
    protected $fillable = [
         'categories_id','products_id' ];
    protected $table = 'categorie_product';
}
