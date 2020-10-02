@extends('layouts.main-layout')
@section('content')
  <h1>Create:</h1>

  <form action="{{ route('emp-store') }}" method="post">
    @csrf
    @method('POST')
    <div>
      <label for="firstname">Firstname:</label><br>
      <input type="text" name="firstname">
    </div>
    <div>
      <label for="lastname">Lastname:</label><br>
      <input type="text" name="lastname">
    </div>
    <div>
      <label for="date_of_birth">Date of Birth:</label><br>
      <input type="date" name="date_of_birth">
    </div>
    <div>
      Location:
    </div>
    <select name="location_id">
      @foreach ($locs as $loc)
        <option value="{{$loc -> id}}">{{$loc -> city }} - {{$loc -> state}}</option>
      @endforeach
    </select>
    <br><br>
    <button type="submit" name="button">Send</button>
  </form>

@endsection
