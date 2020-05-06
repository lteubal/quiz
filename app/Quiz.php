<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function questions()
    {
        return $this->hasMany('App\QuizQuestion');
    }
    public function firstQuestion($quizId)
    {
        return $this->find($quizId)->questions->first()['id'];
    }
}
