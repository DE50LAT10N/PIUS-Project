<?php

namespace App\Http\Controllers;
use App\Models\Topic;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function mp(){
        return view('head');
    }

}
