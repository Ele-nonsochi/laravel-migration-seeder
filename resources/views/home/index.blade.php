<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<title>Agenzia di viaggi</title>
</head>
<body>
    <div class="py-4 d-flex flex-wrap justify-content-center">
        @foreach ($travels as $travel)
        <div class="card col-3 m-2 text-center">
            <div class="card-body">
                <img src="{{$travel->image_path}}" class="card-img-top" alt="img">
                <h4 class="card-text">City: {{$travel->city}}</h4>
                <h5 class="card-text">Duration: {{$travel->duration}}</h5>
                <h5 class="card-text">Description: {{$travel->description}}</h5>
                <h5 class="card-text">Price: ${{$travel->price}}</h5>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>