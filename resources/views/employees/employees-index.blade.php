@extends('layouts.main-layout')
@section('content')
  <h1>EMPLOYEES:</h1>

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
