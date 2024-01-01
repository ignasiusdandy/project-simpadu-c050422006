<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class Schedule extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'student_id',
        'subject_id',
        'schedule_date',
        'schedule_type',
    ];
}

// class Schedule extends Model
// {
//     use HasFactory;

//     public function subject()
//     {
//         return $this->belongsTo(Subject::class);
//     }

//     public function student()
//     {
//         return $this->belongsTo(User::class);
//     }
// }
