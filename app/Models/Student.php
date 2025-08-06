<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Accessor to always return the name in uppercase
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }


    // Mutator: format name to Title Case before saving
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }
}

