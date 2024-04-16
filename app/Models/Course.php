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
        'student_id', // foreign key (Student model)
    ];

    // each course belongs to one student
    public function student()
    {
        return $this->belongsTo(Student::class); 
    }

    // each course belongs to one teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class); 
    }
}
