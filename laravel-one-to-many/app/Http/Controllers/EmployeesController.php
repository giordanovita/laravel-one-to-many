<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class EmployeesController extends Controller
{
    public function home(){
        $employees = Employee::all();
        return view('pages.home', compact('employees'));
    }

}
