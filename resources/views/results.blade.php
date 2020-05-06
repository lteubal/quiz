<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quiz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
            <div class="content">
                <div class="title m-b-md">
                    Results
                </div>

                <div>
                   
                    <div class="card m-b-md flex-center" style="width: 48rem;" >
                       
                        <div class="card-body">
                            
                        </div>      
                            <h5 class="card-title">{{ $quiz->title }}</h5>
                            <p class="card-text">{{ $quiz->description }}</p>
                            <p class="card-text">Score: {{ $score }}</p>
                            <p class="card-text">Correct Answers: {{ $correct_answers }} of {{ $quiz->questions->count() }}</p>
                            <a href="/"  class="btn btn-primary btn-sm m-b-md"> Take Another Quiz </a>
                        </div>
                    </div>          
                    
                </div>
            </div>
        </div>
    </body>
</html>
