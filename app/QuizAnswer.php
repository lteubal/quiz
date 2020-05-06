<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model
{
    public function question()
    {
        return $this->belongsTo('App\QuizQuestion');
    }
}
