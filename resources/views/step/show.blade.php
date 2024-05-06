@extends('layouts.main')
@section('content')
<div>
<div>{{$step->id}}. {{$step->stepName}} {{$step->course_id}}</div>
<div>{{$step->favouritesNumber}}</div>
<div><a href = "{{route('step.edit', $step -> id)}}"> edit</a></div>

<form action = "{{route('step.delete', $step->id)}}" method = post>
    @csrf
    @method('delete')
  <button type="submit" class="btn btn-primary">Delete</button>
</form>
</div>
@foreach($texts as $text)
<div><a href = "{{route('text.edit', $text-> id)}}"> {{$text->id}}. {{$text->text}} {{$text->step_id}}</a></div>
@endforeach
</div>
</div>
Questions
</div>
</div>
@foreach($questions as $question)
<div><a href = "{{route('question.edit', $question-> id)}}"> {{$question->id}}. {{$question->question}} {{$question->step_id}}</a></div>
<form>
            @foreach($answers as $answer)
            @if($answer->question_id == $question->id)
                <input type="radio" name="answer" value="{{ $answer-> answer}}">{{ $answer-> answer}}<br>
            @endif
            @endforeach
            <button type="submit">Submit</button>
        </form>
@endforeach
</div>
</div>
@endsection