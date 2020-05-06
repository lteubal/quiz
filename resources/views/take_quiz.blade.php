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
                
                <div  class="title">
                    {{ $quiz->title }} 
                </div>             
                <h2  class="m-b-md-60">{{ $quiz->description  }}</h2> 
                <div>
                        <form action="/{{ $quiz->id }}/{{ $question->id }}" method="POST">
                            @csrf
                            <div class="card m-b-md flex-center" style="width: 48rem;">
                                @if($question->image)
                                    <img class="card-img-top" src="{{ $question->image }}" alt="Card image cap">
                                @endif
                                <div class="card-body">
                                    
                                </div>      
                                    <h4>{{ $question->title }}</h4> 
                                    <p>{{ $question->description }}</p>
                        
                                    <select class="custom-select m-b-md-60" style="width: 28rem;" name="answer" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        @foreach ($question->answers as $answer)
                                            <option value="{{ $answer->id }}">{{ $answer->title }}</option> 
                                        @endforeach
                                    
                                    </select>
                                    <button type="submit" class="btn btn-primary btn-sm m-b-md"> Next > </button>
                                </div>
                            </div>  
                        </form>
                    
                </div>
        </div>
    </body>
</html>
