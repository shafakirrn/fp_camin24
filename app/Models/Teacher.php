<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'mobile',
        'subject'
    ];

    // each teacher teaches one course
    public function course()
    {
        return $this->hasOne(Course::class); 
    }
}