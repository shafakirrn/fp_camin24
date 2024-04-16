<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'schedule',
        'teacher_id', // foreign key (Teacher model)
    ];

    // each course has one teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class); 
    }

    // each course has multiple students
    public function students()
    {
        return $this->belongsToMany(Student::class); 
    }
}
