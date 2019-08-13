<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = "departments";
    protected $primaryKey = 'departmentId';

    function employees() {
        return $this->hasMany(Employee::class, 'departmentId');
    }
}