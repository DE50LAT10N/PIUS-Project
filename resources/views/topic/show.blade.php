@extends('layouts.main')
@section('content')
<div>
<div>{{$topic->id}}. {{$topic->courseName}}</div>
<div>{{$topic->favouritesNumber}}</div>
<div><a href = "{{route('topic.edit', $topic -> id)}}"> edit</a></div>

<form action = "{{route('topic.delete', $topic->id)}}" method = post>
    @csrf
    @method('delete')
  <button type="submit" class="btn btn-primary">Delete</button>
</form>
</div>
@foreach($steps as $step)
<div><a href = "{{route('step.show', $step-> id)}}"> {{$step->id}}. {{$step->stepName}}</a></div>
@endforeach
</div>
@endsection