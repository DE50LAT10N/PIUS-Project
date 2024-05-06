<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step;
use App\Models\Text;
use App\Models\Question;
use App\Models\Answer;

class StepController extends Controller{

    public function create(){
        return view('step.create');        
    }

    public function show(Step $step){
        $texts = Text::where('step_id', $step->id)->get();
        $questions = Question::where('step_id', $step->id)->get();
        $answers = Answer::where('step_id', $step->id)->get();
        return view('step.show', compact('step','texts','questions','answers'));        
    }

    public function edit(Step $step){
        return view('step.edit', compact('step'));        
    }

    public function update(Step $step){
        $data = request()->validate([
            'stepName' => 'string',
            'course_id' =>'unsignedBigInteger'
        ]);  
        
        $step -> update($data);

        return redirect()->route('step.show', $step->id);
    }


    public function store(){
        $data = request()->validate([
            'stepName' => 'string',
            'course_id' =>'integer'
        ]);  
        
        Step::create($data);

        return redirect()->route('step.index');
    }

    public function index(){
        $steps = step::all();
        return view('step.index', compact('steps'));
    }

    public function destroy(step $step){
        $step -> delete();

        return redirect()->route('step.index');       
    }
}
