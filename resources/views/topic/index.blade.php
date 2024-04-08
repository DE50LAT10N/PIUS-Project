@extends('layouts.main')
@section('content')
<div>
@foreach($topics as $topic)
<div>{{$topic->courseName}}</div>
@endforeach
</div>
@endsection