<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id']; //untuk menunjukkan yang tidak bolleh diisi


    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
