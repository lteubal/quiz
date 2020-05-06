<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;

class QuizController extends Controller
{
    public function index(Quiz $quizzes)
    {
        return view('quiz')->with(['quizzes' => $quizzes->all()]);
    }

    public function take(Quiz $quiz, $questionId)
    {
        $question = $quiz->questions->find($questionId);
        if ($question) {
            $nextQuestion = $quiz->questions->where('id', '>', $questionId)->min('id');
            return view('take_quiz')->with(compact('quiz', 'question', 'nextQuestion'));
        }
    }

    public function postTake(Quiz $quiz, $questionId)
    {
        $answers = session('answers');
        $question = $quiz->questions->find($questionId);
    
        if ($question->correctAnswer() == request()->answer) {
            $answers[$question->id] = $question->score;
        } else {
            $answers[$question->id] = 'wrong';
        }
      
        session(['answers' => $answers]);

        $nextQuestion = $quiz->questions->where('id', '>', $questionId)->min('id');
        
        if ($nextQuestion) {
            return $this->take($quiz, $nextQuestion);
        } else {
            $score = array_filter($answers, function ($answer) {
                return $answer != "wrong";
            });

            $correct_answers = count($score);
            
            $score = array_reduce($score, function ($carry, $item) {
                return $carry + $item;
            }, 0);

            
            return view('results')->with(compact('quiz', 'score', 'correct_answers'));
        }
    }
}
