<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSchedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_detail_id',
        'start_at',
        'end_at',
        'workdays',
        'address',
        'phone',
    ];

    // Define the relationship with DoctorDetail
    public function doctorDetail()
    {
        return $this->belongsTo(DoctorDetail::class);
    }

    // Define the relationship with Appointment
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}

