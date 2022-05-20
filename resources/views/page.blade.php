<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies DB</title>
</head>
<body>
    <h1>MOVIES</h1>
    <!-- @dump($movies) -->
    <div class="container-movies">
        @foreach($movies as $movie)
            <div class="card">
                <h2>{{ $movie['title'] }}</h2> 
                <p><b>Original Title:</b> {{ $movie['original_title'] }}</p>
                <p><b>Nationality:</b> {{ $movie['nationality'] }}</p>
                <p><b>Date:</b> {{ $movie['date'] }}</p>
                <p><b>Vote:</b> {{ $movie['vote'] }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>

<!--
    "id" => 1
        "title" => "Il Padrino"
        "original_title" => "The Godfather"
        "nationality" => "american"
        "date" => "1972-03-24"
        "vote" => 9.2
-->
