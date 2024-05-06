<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;
    protected $table = 'steps';
    protected $guarded = [];


    public function topic()
    {
        return $this ->belongsTo(Step::class, 'course_id', 'id');
    }
    public function questions()
    {
        return $this ->hasMany(Question::class, 'step_id', 'id');
    }
    public function texts()
    {
        return $this ->hasMany(Text::class, 'step_id', 'id');
    }
    public function answers()
    {
        return $this ->hasMany(Answers::class, 'step_id', 'id');
    }

}
