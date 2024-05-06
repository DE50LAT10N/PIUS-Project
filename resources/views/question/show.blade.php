@extends('layouts.main')
@section('content')
<div>
<div>{{$question->id}}. {{$question->questionName}} {{$question->course_id}}</div>
<div>{{$question->favouritesNumber}}</div>
<div><a href = "{{route('question.edit', $question -> id)}}"> edit</a></div>

<form action = "{{route('question.delete', $question->id)}}" method = post>
    @csrf
    @method('delete')
  <button type="submit" class="btn btn-primary">Delete</button>
</form>
</div>
@endsection