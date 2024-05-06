@extends('layouts.main')
@section('content')
<div>
<div>{{$answer->id}}. {{$answer->answerName}} {{$answer->course_id}}</div>
<div>{{$answer->favouritesNumber}}</div>
<div><a href = "{{route('answer.edit', $answer -> id)}}"> edit</a></div>

<form action = "{{route('answer.delete', $answer->id)}}" method = post>
    @csrf
    @method('delete')
  <button type="submit" class="btn btn-primary">Delete</button>
</form>
</div>
@endsection