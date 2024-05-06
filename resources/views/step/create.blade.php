@extends('layouts.main')
@section('content')
<div>
<form action = "{{route('step.store')}}" method = post>
    @csrf
  <div class="form-group">
    <label for="title">step name</label>
    <input type="text" name = "stepName" class="form-control" id="title"  placeholder="step name">
    <label for="title">topic id</label>
    <input type="text" name = "course_id" class="form-control" id="title"  placeholder="course_id">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection