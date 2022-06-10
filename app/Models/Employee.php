<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'firstName', 'middleName', 'lastName', 'age', 'gender', 'address', 'email', 'salary',
        'startDate', 'vacationDays', 'workingHours', 'workingDays', 'workingDays', 'grade', 'skill',
        'show', 'position', 'username', 'jobId', 'jobName', 'iban'];
}
