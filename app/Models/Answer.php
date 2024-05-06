<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $table = 'answers';
    protected $guarded = [];


    public function step()
    {
        return $this ->belongsTo(Answer::class, 'step_id', 'id');
    }

    public function answer()
    {
        return $this ->belongsTo(Answer::class, 'question_id', 'id');
    }
}
