@extends('adminlte::page')
@section('content_header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Detail</title>
    <style>
        p{
            font-family:'Courier New', Courier, monospace;
            font-weight:bolder;
            font-size: 18px;
        }
        span{
            font-weight: normal;
            letter-spacing: 0px;

        }
    </style>
</head>
<body>
@auth
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 ">
          <div class="card mt-4 shadow-lg p-3" >
              <div class="row g-0">
              <div class="col-md-6 mt-2 text-center">
                   <img src="{{asset($stagiaire->photo) }}" class="shadow text-center" width="63%" alt="image">
                   <h5 class="text-center mt-2 fw-bold " style="letter-spacing: 3px">{{ $stagiaire->nom }} {{ $stagiaire->prenom}}</h5>
                </div>
              <div class="col-md-6">
                <div class="card-body bg-light mt-2 shadow">
                    <form >
                        @csrf
                        <p class="card-text ">FirstName : <span>{{ $stagiaire->prenom }}</span></p>
                        <p class="card-text">LastName : <span>{{ $stagiaire->nom }}</span></p>
                        <p class="card-text">Fillier: <span>{{ $stagiaire->fillier }}</span></p>
                        <p class="card-text ">Gender : <span>{{ $stagiaire->sexe}}</span></p>
                        <p class="card-text">Email : <span>{{ $stagiaire->email }}</span></p>
                        <p class="card-text">Phone : <span>{{ $stagiaire->tel }}</span></p>
                        <p class="card-text">City : <span>{{ $stagiaire->ville}}</span></p>
                        <p class="card-text">Age : <span>{{ $stagiaire->age }}</span></p>
                        <p class="card-text">Birthday : <span>{{ $stagiaire->dateN }}</span></p>
                        
                    </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  
</div>
</div>
@endauth
</body>
</html>
@endsection
