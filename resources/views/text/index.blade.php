@extends('layouts.main')
@section('content')
<div>
<div><a href = "{{route('text.create')}}">Add</a></div>
@foreach($texts as $text)
<div><a href = "{{route('text.show', $text -> id)}}"> {{$text->id}}. {{$text->textName}} {{$text->course_id}}</a></div>
@endforeach
</div>
@endsection