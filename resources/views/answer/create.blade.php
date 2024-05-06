@extends('layouts.main')
@section('content')
<div>
<form action = "{{route('answer.store')}}" method = post>
    @csrf
  <div class="form-group">
    <label for="title">answer</label>
    <input type="text" name = "answer" class="form-control" id="title"  placeholder="answer">
    <label for="title">topic id</label>
    <input type="text" name = "step_id" class="form-control" id="title"  placeholder="step_id">
    <label for="title">question id</label>
    <input type="text" name = "question_id" class="form-control" id="title"  placeholder="question_id">
    <label for="title">is it correct</label>
    <input type="text" name = "isCorrect" class="form-control" id="title"  placeholder="True/False">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection