<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $fillable = 
    [
        'name',
        'tartib',
    ];

    public function davomat()
    {
        return $this->hasMany(Davomat::class);
    }

    public function checks($date)
    {
        $this->davomat()->where('date' , $date)->first();
    }
}
