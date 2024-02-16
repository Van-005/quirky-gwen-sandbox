<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'phone',
        'birth_date',
        'gender',
        'address',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
