<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'array_image', 'price', 'description', 'active', 'category_id', 'sub_category_id' ];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function sub_category()
    {
    	return $this->belongsTo(SubCategory::class);
    }
}
