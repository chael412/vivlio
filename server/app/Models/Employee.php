<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'us_id',
        'dp_id',
        'employee_no'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'us_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'dp_id');
    }
}
