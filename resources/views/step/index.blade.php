@extends('layouts.main')
@section('content')
<div>
<div><a href = "{{route('step.create')}}">Add</a></div>
@foreach($steps as $step)
<div><a href = "{{route('step.show', $step -> id)}}"> {{$step->id}}. {{$step->stepName}} {{$step->course_id}}</a></div>
@endforeach
</div>
@endsection