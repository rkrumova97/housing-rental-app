<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;


/**
 * @mixin Builder
 */
class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'firstName', 'middleName', 'lastName', 'age', 'gender', 'address', 'email', 'salary',
        'startDate', 'vacationDays', 'workingHours', 'workingDays', 'grade', 'skill',
        'show', 'user_id', 'jobId', 'jobName', 'iban'];

    public function position(): HasOne
    {
        return $this->hasOne(Position::class);
    }

    public function username(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function project(): HasOne
    {
        return $this->hasOne(Project::class);
    }
}
