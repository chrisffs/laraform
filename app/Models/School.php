<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{   
    protected $fillable = [
        'schoolName'
    ];
    use HasFactory;
}
