<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index(){

        return view('welcome');

    }

    public function register(){


        return view('register');
    }

    public function employee(){

        return view('employee');
    }

    public function create(Request $request){

        $employees = new Employee();
        $employees->name = $request->name;
        $employees->date = $request->date;
        $employees->city = $request->city;
        $employees->dependents = $request->dependents;
        $employees->description = $request->description;
        $employees->skills = $request->skills;


        $employees->save();

        return redirect('/')->with('msg', 'Registration completed successfully');
    }

}
