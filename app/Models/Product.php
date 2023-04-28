<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parameter;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function parameter()
    {
        return $this->belongsTo(Parameter::class);
    }
}
