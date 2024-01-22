<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            @foreach ($movie as $movies)
                <div class="col-2">
                    <h3>{{$movies->title}}</h3>
                    <p>Titolo Originale -> {{$movies->original_title}}</p>
                    <p>Lingua -> {{$movies->nationality}}</p>
                    <p>Data -> {{$movies->date}}</p>
                </div>
            @endforeach
        </div>
    </div>
    

</body>
</html>