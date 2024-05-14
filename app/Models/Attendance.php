<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['user_id', 'name', 'specification', 'school', 'status', 'action'];
    use HasFactory;

    // Relationship to Interns
    // public function intern() {
    //     return $this->belongsTo(Intern::class, 'user_id');
    // }
}
