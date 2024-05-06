@extends('layouts.main')
@section('content')
<div>
<div><a href = "{{route('topic.create')}}">Add</a></div>
@foreach($topics as $topic)
<div><a href = "{{route('topic.show', $topic -> id)}}"> {{$topic->id}}. {{$topic->courseName}}</a></div>
@endforeach
</div>
@endsection