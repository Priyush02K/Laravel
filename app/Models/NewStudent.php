<?php

namespace App\Models;

use App\Http\Controllers\NewStudentController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Eloquent model

class NewStudent extends Model
{
    protected $fillable = ['name', 'email'];

    use HasFactory;
}


