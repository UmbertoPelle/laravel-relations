@extends('layouts.main-layout')
@section('content')
  <h1>EMPLOYEES:</h1>
  <h3><a href={{ route('emp-create') }}>New Employee</a></h3>
  <ul>
    @foreach ($emps as $emp)
      <li>
        <a href={{ route('emp-show', $emp -> id ) }}>
          {{ $emp -> firstname}}
          {{ $emp -> lastname}}
        </a>
      </li>
    @endforeach
  </ul>
@endsection
