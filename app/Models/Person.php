<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'firstName', 'middleName', 'lastName', 'email', 'gender', 'aera', 'city', 'address', 'interviewDate'];
}
