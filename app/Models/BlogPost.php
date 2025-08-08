<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    // BlogPost.php
public function author() {
    return $this->belongsTo(Author::class);
}
}
