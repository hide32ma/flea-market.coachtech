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

    // 検索用のスコープを定義
    


    // Category.php(categoriesテーブル)とのリレーション
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    // User.php(usersテーブル)とのリレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function likedByUsers()
    {
        return $this->belongsToMany(User::class, 'likes')->withTimestamps();
    }
}

