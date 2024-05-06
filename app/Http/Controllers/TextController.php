<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Step;
use App\Models\Text;

class textController extends Controller{

    public function create(){
        return view('text.create');        
    }

    public function show(Text $text){
        return view('text.show', compact('text'));        
    }

    public function edit(Text $text){
        return view('text.edit', compact('text'));        
    }

    public function update(Text $text){
        $data = request()->validate([
            'step_id' => 'integer',
            'text'=>'text'
        ]);  
        
        $text -> update($data);

        return redirect()->route('text.show', $text->id);
    }


    public function store(){
        $data = request()->validate([
            'step_id' => 'integer',
            'text'=>'string'
        ]);  
        
        Text::create($data);

        return redirect()->route('text.index');
    }

    public function index(){
        $texts = Text::all();
        return view('text.index', compact('texts'));
    }

    public function destroy(Text $text){
        $text -> delete();

        return redirect()->route('text.index');       
    }
}
