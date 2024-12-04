<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Davomat extends Model
{
    use HasFactory;


    protected $fillable = 
    [
        'student_id',
        'status',
        'date',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
