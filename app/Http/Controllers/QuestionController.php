<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller{

    public function create(){
        return view('question.create');        
    }

    public function show(Question $question){
        return view('question.show', compact('question'));        
    }

    public function edit(Question $question){
        return view('question.edit', compact('question'));        
    }

    public function update(Question $question){
        $data = request()->validate([
            'step_id' => 'integer',
            'question'=>'question'
        ]);  
        
        $question -> update($data);

        return redirect()->route('question.show', $question->id);
    }


    public function store(){
        $data = request()->validate([
            'step_id' => 'integer',
            'question'=>'string'
        ]);  
        
        Question::create($data);

        return redirect()->route('question.index');
    }

    public function index(){
        $questions = Question::all();
        return view('question.index', compact('questions'));
    }

    public function destroy(Question $question){
        $question -> delete();

        return redirect()->route('question.index');       
    }
}