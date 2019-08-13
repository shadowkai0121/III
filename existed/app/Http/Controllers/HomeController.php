<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Models\Department;
use App\http\Models\Employee;

class HomeController extends Controller
{
    function index(){
        // dd(Department::find(1)->departmentName());
        // dd(Employee::find(1)->department());
        // $d = Department::find(1)->employees();

        $employeeList = Employee::all();
        return view("home.index", compact('employeeList'));
        
    }
}