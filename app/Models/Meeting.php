<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class Meeting extends Model
{
    use HasFactory;
    protected $fillable = [
        'parente_id',
        'teacher_id',
        'Meeting_title',
        'Meeting_date',
        'Meeting_time',
        'purpose',
    ];
}
