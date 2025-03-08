<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'condition',
        'name',
        'brand_name',
        'explanation',
        'price',
        'category_id',
        'user_id',
    ];

    // categoryとのリレーション
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    // Userとのリレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

