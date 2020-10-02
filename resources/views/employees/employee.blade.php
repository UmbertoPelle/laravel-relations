@extends('layouts.main-layout')
@section('content')
  <h1>
    {{ $emp -> firstname}}
    {{ $emp -> lastname}}:
  </h1>
    <h3>
      Date of Birth:
      {{ $emp -> date_of_birth }}
    </h3>
    <h3>
      Work In:
      ({{ $emp -> location -> city }}-
      {{ $emp -> location -> state }})
    </h3>
    <ul>
    @foreach ($emp -> tasks as $task)
      <li>
        <strong>{{ $task -> name}}</strong> ->
        {{ $task -> description}}
      </li>
    @endforeach
  </ul>
  <h3><a href="#">Edit</a></h3>
  <h3><a href={{ route('emp-delete', $emp -> id )}}>Delete</a></h3>
@endsection
