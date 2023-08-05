<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Transporation extends Model
{
    use HasFactory;
    protected $table='transporations';
    protected $fillable = [
        'student_id',
         
        'contact_detail',
        'date',
        'transporatation_type',
        'total_present',
    ];
    
}
