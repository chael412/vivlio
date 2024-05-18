<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        "us_id",
        "username",
        "password"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'us_id');
    }

}