<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller{

  public function index(){

    $emps = Employee::all();
    return view('employees.employees-index', compact('emps'));
  }

  public function show($id){

    $emp = Employee::findOrFail($id);
    return view('employees.employee', compact('emp'));
  }

  public function destroy($id){

    $emp = Employee::findOrFail($id);
    $emp -> delete();

    return redirect() -> route('emp-index');
  }
}
