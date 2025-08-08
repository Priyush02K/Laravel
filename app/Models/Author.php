<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    // Author.php
public function blogPosts() {
    return $this->hasMany(BlogPost::class);
}



}
