@extends('layouts.main')
@section('content')
<div>
<form action = "{{route('text.update', $text->id)}}" method = "post">
    @csrf
    @method('patch')
  <div class="form-group">
    <label for="title">text name</label>
    <input type="text" name = "courseName" class="form-control" id="title"  placeholder="text name" value = "{{$text->courseName}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection