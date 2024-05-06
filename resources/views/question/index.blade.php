@extends('layouts.main')
@section('content')
<div>
<div><a href = "{{route('question.create')}}">Add</a></div>
@foreach($questions as $question)
<div><a href = "{{route('question.show', $question -> id)}}"> {{$question->id}}. {{$question->questionName}} {{$question->course_id}}</a></div>
@endforeach
</div>
@endsection