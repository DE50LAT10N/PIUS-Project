@extends('layouts.main')
@section('content')
<div>
<form action = "{{route('answer.update', $answer->id)}}" method = "post">
    @csrf
    @method('patch')
  <div class="form-group">
    <label for="title">answer name</label>
    <input type="answer" name = "courseName" class="form-control" id="title"  placeholder="answer name" value = "{{$answer->courseName}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection