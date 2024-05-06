@extends('layouts.main')
@section('content')
<div>
<div>{{$text->id}}. {{$text->textName}} {{$text->course_id}}</div>
<div>{{$text->favouritesNumber}}</div>
<div><a href = "{{route('text.edit', $text -> id)}}"> edit</a></div>

<form action = "{{route('text.delete', $text->id)}}" method = post>
    @csrf
    @method('delete')
  <button type="submit" class="btn btn-primary">Delete</button>
</form>
</div>
@endsection