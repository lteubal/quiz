<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quiz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
            <div class="content">
                <div class="title m-b-md">
                    Take a Quiz
                </div>

                <div>
                    @foreach ($quizzes as $quiz) 
                    <div class="card m-b-md flex-center"  >
                        @if($quiz->image)
                            <img class="card-img-top" src="{{ $quiz->image }}" alt="Card image cap">
                        @endif
                        <div class="card-body">
                            
                        </div>      
                            <h5 class="card-title">{{ $quiz->title }}</h5>
                            <p class="card-text">{{ $quiz->description }}</p>
                            <p class="card-text">{{ $quiz->questions->count() }} questions</p>
                            <a href="/{{ $quiz->id }}/{{ $quiz->firstQuestion($quiz->id) }}"  class="btn btn-primary btn-sm m-b-md"> Take Quiz </a>
                        </div>
                    </div>          
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
