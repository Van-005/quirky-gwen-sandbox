<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolRoomType extends Model
{
    use HasFactory;

    // protected $attributes = [
    //     'school_id'=>1,
    // ];

    protected $fillable = [
        'name',
    ];

}
