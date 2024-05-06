<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class AnswerController extends Controller{

    public function create(){
        return view('answer.create');        
    }

    public function show(Answer $answer){
        return view('answer.show', compact('answer'));        
    }

    public function edit(Answer $answer){
        return view('answer.edit', compact('answer'));        
    }

    public function update(Answer $answer){
        $data = request()->validate([
            'step_id' => 'integer',
            'question_id' => 'integer',
            'answer'=>'string',
            'isCorrect'=>'boolean'
        ]);  
        
        $answer -> update($data);

        return redirect()->route('answer.show', $answer->id);
    }


    public function store(){
        $data = request()->validate([
            'step_id' => 'integer',
            'question_id' => 'integer',
            'answer'=>'string',
            'isCorrect'=>'string'
        ]);  
        
        Answer::create($data);

        return redirect()->route('answer.index');
    }

    public function index(){
        $answers = Answer::all();
        return view('answer.index', compact('answers'));
    }

    public function destroy(Answer $answer){
        $answer -> delete();

        return redirect()->route('answer.index');       
    }
}