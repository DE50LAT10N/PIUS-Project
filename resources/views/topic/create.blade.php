@extends('layouts.main')
@section('content')
<div>
<form action = "{{route('topic.store')}}" method = post>
    @csrf
  <div class="form-group">
    <label for="title">Topic name</label>
    <input type="text" name = "courseName" class="form-control" id="title"  placeholder="Topic name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection