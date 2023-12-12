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
    <title>Modifier</title>
    <style>
      input{
        font-family:'Courier New', Courier, monospace;       
      }
      label{
        letter-spacing: 2px;
      }
    </style>
</head>
<body>
@auth  
<div class="container">
  <div class="row justify-content-center">
    <div class="text-center">
      @if (session()->has('flash_message'))
         <div class="alert alert-success">
           <button type="button" class="close" data-bs-dismiss="alert" id="alert">X</button>
           {{session()->get('flash_message')}}
         </div>
      @endif  
     </div> 
    <div class="col-md-7 ">
      <div class="card shadow-lg">
        <div class="card-body">
            <form action="{{ url('stagiaire/' .$stagiaire->id) }}" method="post">
              @csrf
              @method("PUT")
              <input type="hidden" name="id" id="id" value="{{$stagiaire->id}}" id="id" />
              <label>LastName :</label>
              <input type="text" name="nom" id="nom" value="{{$stagiaire->nom}}"  class="form-control mb-2">
              <label>FirstName :</label>
              <input type="text" name="prenom" value="{{$stagiaire->prenom}}" id="prenom" class="form-control mb-2">
              <label>Gender :</label>
              <input type="text" name="sexe" id="sexe" value="{{$stagiaire->sexe}}"  class="form-control mb-2">
              <label>Fillier :</label>
              <input type="text" name="fillier" id="fillier" value="{{$stagiaire->fillier}}" class="form-control mb-2">
              <label>Email :</label>
              <input type="email" name="email" id="email" value="{{$stagiaire->email}}"  class="form-control mb-2">
              <label>Phone :</label>
              <input type="text" name="tel" id="tel" value="{{$stagiaire->tel}}"  class="form-control mb-2">
              <label>City :</label>
              <input type="text" name="ville" id="ville" value="{{$stagiaire->ville}}" class="form-control mb-2">
              <label>Image :</label>
              <input type="file" name="photo" id="photo"  class="form-control mb-2">
              <label>Age :</label>
              <input type="text" name="age" id="age" value="{{$stagiaire->age}}" class="form-control mb-2">
              <label>Birthday :</label>
              <input type="date" name="dateN" id="dateN" value="{{$stagiaire->dateN}}" class="form-control mb-2">
              <button type="submit" class="btn btn-success mt-2">Update</button>
          </form>
        
        </div>
      </div>
    </div>
  </div>
</div>

@endauth
</body>
</html>
@endsection
