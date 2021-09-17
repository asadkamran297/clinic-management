<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'token_no',
        'title',
        'name',
        'dob',
        'email',
        'phone',
        'cnic',
        'address',
        'gender',
        'visit_datetime',
        'marital_status',
        'doctor_name',
        'amount',
        'injury',
        'notes',
        'blood_group',
        'image',
    ];
}
