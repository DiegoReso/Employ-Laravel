<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index(){

        $search = request('search');

        if($search){

            $employees = Employee::where([['name', 'like', '%'.$search.'%']])->
            orWhere([['facility', 'like', '%'.$search.'%']])->
            orWhereJsoncontains('items', $search)
            ->get();

        }else{

            $employees = Employee::all();

        }

        return view('welcome', ['employees' => $employees, 'search' => $search]);

    }

    public function register(){


        return view('register');
    }

    public function employee($id){


        $employee = Employee::findOrFail($id);


        return view('employee', ['employee' => $employee]);
    }

    public function employeessn($id){


        $employee = Employee::findOrFail($id);


        return view('employeessn', ['employee' => $employee]);
    }


    public function create(Request $request){

        $employees = new Employee();
        $employees->name = $request->name;
        $employees->last_name = $request->last_name;
        $employees->middle_name = $request->middle_name;
        $employees->date_birth = $request->date_birth;
        $employees->phone = $request->phone;
        $employees->ssn = $request->ssn;
        $employees->date_hire = $request->date_hire;
        $employees->facility = $request->facility;
        $employees->position = $request->position;
        $employees->date_termination = $request->date_termination;
        $employees->items = $request->items;
        $employees->street = $request->street;
        $employees->city = $request->city;
        $employees->state = $request->state;
        $employees->zip = $request->zip;
        $employees->description = $request->description;


        $employees->save();

        return redirect('/')->with('msg', 'Registration completed successfully');
    }

    public function edit($id){

        $employee = Employee::findOrFail($id);


        return view('edit', ['employee' => $employee]);
    }

    public function update(Request $request){
        $data = $request->all();
        Employee::FindOrFail($request->id)->update($data);

        return redirect('/');

    }

    public function delete($id){

        Employee::findOrFail($id)->delete();

        return redirect('/');
    }

}
