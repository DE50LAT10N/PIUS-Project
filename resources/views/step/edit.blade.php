@extends('layouts.main')
@section('content')
<div>
<form action = "{{route('step.update', $step->id)}}" method = "post">
    @csrf
    @method('patch')
  <div class="form-group">
    <label for="title">step name</label>
    <input type="text" name = "courseName" class="form-control" id="title"  placeholder="step name" value = "{{$step->courseName}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection