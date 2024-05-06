@extends('layouts.main')
@section('content')
<div>
<form action = "{{route('question.update', $question->id)}}" method = "post">
    @csrf
    @method('patch')
  <div class="form-group">
    <label for="title">question name</label>
    <input type="question" name = "courseName" class="form-control" id="title"  placeholder="question name" value = "{{$question->courseName}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection