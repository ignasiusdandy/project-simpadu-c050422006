<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Subject extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'title',
        'lecturer_id',
        'semester',
        'academic_year',
        'sks',
        'code',
        'description',
    ];
}

// class Subject extends Model
// {
//     use HasFactory;

//     public function lecturer()
//     {
//         return $this->belongsTo(User::class);
//     }
// }
