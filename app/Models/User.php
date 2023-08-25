<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'role',
        'is_active',
    ];

    // Define the relationship with DoctorDetail
    public function doctorDetail()
    {
        return $this->hasOne(DoctorDetail::class);
    }

    // Define the relationship with Appointment
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}


