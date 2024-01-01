<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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

    public function lecturer()
    {
        return $this->belongsTo(User::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Subject::class);
    }

    public function student()
    {
        return $this->belongsTo(User::class);
    }

    
}

// class Subjectt extends Model
// {
//     use HasFactory;

//     public function lecturer()
//     {
//         return $this->belongsTo(User::class);
//     }
// }
