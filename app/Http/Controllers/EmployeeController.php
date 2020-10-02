<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
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

  public function edit($id){
    $emp = Employee::findOrFail($id);
    $locs = Location::all();

    return view('employees.emp-update', compact('emp','locs'));
  }

  public function update(Request $request, $id){
    $data = $request -> all();
    $emp = Employee::findOrFail($id);

    $emp -> update($data);
    return redirect() -> route('emp-index');
  }

  public function create(){
    $locs = Location::all();
    return view('employees.emp-create', compact('locs'));
  }

  public function store(Request $request){
    $data = $request ->all();
    $emp = Employee::create($data);

    return redirect() -> route('emp-index');
  }
}
