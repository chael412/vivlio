<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    use HasFactory;


    protected $fillable = [
        'stud_id',
    ];

    // Define relationships if any
    public function user()
    {
        return $this->belongsTo(Student::class, 'stud_id');
    }
}
