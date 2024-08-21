<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function showtable(){
        Employee::create([
            'EmpId'=>101,
            'Name'=>"Anson",
            'Department'=>'Finance',
            'Salary'=>50000
        ]);

        Employee::create([
            'EmpId'=>102,
            'Name'=>"Adeline",
            'Department'=>'Insurance',
            'Salary'=>25000
        ]);
    }

    public function viewpage(){
        $employee_data = Employee::get();
        return view('employee_page',compact('employee_data'));
    }
}

