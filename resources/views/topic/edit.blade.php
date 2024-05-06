@extends('layouts.main')
@section('content')
<div>
<form action = "{{route('topic.update', $topic->id)}}" method = "post">
    @csrf
    @method('patch')
  <div class="form-group">
    <label for="title">Topic name</label>
    <input type="text" name = "courseName" class="form-control" id="title"  placeholder="Topic name" value = "{{$topic->courseName}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection