<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{   
    protected $fillable = [
        'firstName', 
        'lastName', 
        'midName', 
        'school', 
        'internCategory', 
        'onboardingDate'
    ];

    use HasFactory;

    public function scopeFilter($query, $filters) {
        if ($filters['search'] ?? false) {
            $query->where('firstName', 'like', '%' . request('search') . '%')
                ->orWhere('midName', 'like', '%' . request('search') . '%')
                ->orWhere('lastName', 'like', '%' . request('search') . '%')
                ->orWhere('internCategory', 'like', '%' . request('search') . '%')
                ->orWhere('school', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship to Attendance
    // public function attendance() {
    //     return $this->hasMany(Attendance::class, 'user_id');
    // }
}
