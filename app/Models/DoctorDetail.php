<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'doctor_type_id',
        'degree',
        'gender',
    ];

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with DoctorType
    public function doctorType()
    {
        return $this->belongsTo(DoctorType::class);
    }

    // Define the relationship with DoctorSchedule
    public function doctorSchedule()
    {
        return $this->hasOne(DoctorSchedule::class);
    }

    // Define the relationship with Appointment
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}


