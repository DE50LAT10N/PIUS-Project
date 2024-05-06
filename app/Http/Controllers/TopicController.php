<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Step;

class TopicController extends Controller{

    public function create(){
        return view('topic.create');        
    }

    public function show(Topic $topic){
        $steps = Step::where('course_id', $topic->id)->get();
        return view('topic.show', compact('topic','steps'));        
    }

    public function edit(Topic $topic){
        return view('topic.edit', compact('topic'));        
    }

    public function update(Topic $topic){
        $data = request()->validate([
            'courseName' => 'string'
        ]);  
        
        $topic -> update($data);

        return redirect()->route('topic.show', $topic->id);
    }


    public function store(){
        $data = request()->validate([
            'courseName' => 'string'

        ]);  
        
        Topic::create($data);

        return redirect()->route('topic.index');
    }

    public function index(){
        $topics = Topic::all();
        return view('topic.index', compact('topics'));
    }

    public function destroy(Topic $topic){
        $topic -> delete();

        return redirect()->route('topic.index');       
    }
}
