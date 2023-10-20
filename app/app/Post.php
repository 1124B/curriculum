<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";
    protected $fillable = ['user_id','date', 'title', 'brand_shoe', 'usage', 'size', 'weight', 'review'];
}
