<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use SoftDeletes, HasUuids;
    protected $table = 'employee';
    public $incrementing = false;

    protected $casts = [];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];


}
