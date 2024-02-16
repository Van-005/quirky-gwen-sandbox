<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    // Сотрудники
    public function employees(){
        return $this->hasMany(Employee::class);
    }

    // Группы
    public function groups(){
        return $this->hasMany(Group::class);
    }

    // Уроки
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }

    // Аудитории
    public function schoolRooms(){
        return $this->hasMany(SchoolRoom::class);
    }

    // Типы аудиторий
    public function roomTypes(){
        return $this->hasMany(SchoolRoomType::class);      
    }
}
