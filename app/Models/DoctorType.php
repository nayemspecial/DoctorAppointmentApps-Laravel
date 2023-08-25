<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    // Define the relationship with DoctorDetail
    public function doctorDetails()
    {
        return $this->hasMany(DoctorDetail::class);
    }
}

