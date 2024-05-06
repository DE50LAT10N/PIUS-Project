@extends('layouts.main')
@section('content')
<div>
<div><a href = "{{route('answer.create')}}">Add</a></div>
@foreach($answers as $answer)
<div><a href = "{{route('answer.show', $answer -> id)}}"> {{$answer->id}}. {{$answer->answer}} {{$answer->step_id}} {{$answer->isCorrect}}</a></div>
@endforeach
</div>
@endsection