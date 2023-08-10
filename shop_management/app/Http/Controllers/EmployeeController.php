<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function getEmployeeList(){
        $employees = Employee::all();
        return view('employees.list',[
            'employees'=>$employees,

        ],
    );

    }
    public function createEmployeeForm(){
       
        return view('employees.form');
    }

    public function postEmployee(Request $request){
            // dd($request);
        $userId = Auth::id();
        Employee::create($request->merge(['user_id'=>$userId])->toArray());
        return redirect(route('employees'));
       
    }

    public function showEmployee(string $id = null)
    {   
        return view('employees.profile', [
            'employee' => Employee::findOrFail($id)
        ]);
    }

}
