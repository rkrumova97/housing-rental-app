<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */

class Person extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'firstName', 'middleName', 'lastName', 'email', 'gender', 'area', 'city', 'address', 'interviewDate'];
}
