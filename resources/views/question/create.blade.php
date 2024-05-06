@extends('layouts.main')
@section('content')
<div>
<form action = "{{route('question.store')}}" method = post>
    @csrf
  <div class="form-group">
    <label for="title">question</label>
    <input type="question" name = "question" class="form-control" id="title"  placeholder="question name">
    <label for="title">topic id</label>
    <input type="question" name = "step_id" class="form-control" id="title"  placeholder="course_id">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection