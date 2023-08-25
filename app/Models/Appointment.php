<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'doctor_detail_id',
        'schedule_id',
        'is_appointed',
    ];

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with DoctorDetail
    public function doctorDetail()
    {
        return $this->belongsTo(DoctorDetail::class);
    }

    // Define the relationship with DoctorSchedule
    public function doctorSchedule()
    {
        return $this->belongsTo(DoctorSchedule::class, 'schedule_id');
    }
}



