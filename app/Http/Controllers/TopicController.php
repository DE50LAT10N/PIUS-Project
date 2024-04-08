<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller{

    public function create(){
        $coursArr= [
            [
                'courseName' => '1st course',
                'favouritesNumber' => 10
            ],
            [
                'courseName' => '2nd course',
                'favouritesNumber' => 10
            ],
            [
                'courseName' => '3rd course',
                'favouritesNumber' => 10
            ],  
            ];

        foreach ($coursArr as $item){
            Topic::create($item);
        }

        dd('created');
        
    }

    public function index(){
        $topics = Topic::all();
        return view('topic.index', compact('topics'));
    }
}
