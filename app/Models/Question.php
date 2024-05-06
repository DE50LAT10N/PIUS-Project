<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $guarded = [];


    public function step()
    {
        return $this ->belongsTo(Question::class, 'step_id', 'id');
    }

    public function answers()
    {
        return $this ->hasMany(Answers::class, 'question_id', 'id');
    }
}
