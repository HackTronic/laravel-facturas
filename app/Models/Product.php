<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    public function categorias()
    {
        return $this->belongsTo(Category::class);  //
    }
    public function establecimientos()
    {
        return $this->belongsTo(Establishment::class);  //
    }
}
