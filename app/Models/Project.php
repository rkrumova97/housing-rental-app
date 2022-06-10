<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'startingDate', 'departments', 'grades', 'positions', 'skills'];
}
