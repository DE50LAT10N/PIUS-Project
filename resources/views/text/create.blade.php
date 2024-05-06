@extends('layouts.main')
@section('content')
<div>
<form action = "{{route('text.store')}}" method = post>
    @csrf
  <div class="form-group">
    <label for="title">text</label>
    <input type="text" name = "text" class="form-control" id="title"  placeholder="text name">
    <label for="title">topic id</label>
    <input type="text" name = "step_id" class="form-control" id="title"  placeholder="course_id">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection