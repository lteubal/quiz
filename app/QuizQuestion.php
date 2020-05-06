<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }

    public function answers()
    {
        return $this->hasMany('App\QuizAnswer');
    }

    public function correctAnswer()
    {
        return $this->answers->where('correct', true)->first()['id'];
    }
}
