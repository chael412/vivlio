<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_no',
        'us_id',
        'cs_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'us_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'cs_id');
    }

}
