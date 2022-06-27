<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-danger">Chi tiết xe {{$car -> id}}</h1>
        <div class="row">
            <div class="col-4">
                <img src="/image/{{$car ->image}}" class="rounded" alt="">
            </div>
            <div class="col-8">
                <br>
                <ul>
                    <p><b>Description: </b>{{$car -> description }}</p>
                    <p><b>Model: </b>{{$car-> model }}</p>
                    <p ><b>Produced on: </b>{{ $car -> produced_on }}</p>
                </ul>
            </div>
        </div>    
    </div>
</body>
</html>