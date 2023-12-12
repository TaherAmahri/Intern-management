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
    <title>Create</title>
    <style>
      input{
        font-family:'Courier New', Courier, monospace;       
      }
      label{
        letter-spacing: 2px;
      }
      span{
        font-size: 12px;
      }
    </style>
</head>
<body class="bg-light">
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
      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-body">
              <form action="{{ url('stagiaire')}}" id="form" method="POST" enctype="multipart/form-data" >
                @csrf
                  <label class="mt-2">LastName :</label>
                  <input type="text" name="nom" id="nom" placeholder="Entrez Nom" class="form-control" autocomplete="off"  >
                     @error('nom')
                        <span class="text-danger">{{$message}}</span>
                     @enderror      
                <div class="input-control ">
                  <label class="mt-2">FirstName :</label>
                  <input type="text" name="prenom" id="prenom" placeholder="Entrez Prenom" class="form-control" >
                  @error('prenom')
                  <span class="text-danger">{{$message}}</span>
                  @enderror   
                </div>
                <div class="input-control ">
                  <label class="mt-2">Gender :</label>
                  <input type="text" name="sexe" id="sexe" placeholder="Entrez Sexe" class="form-control" >
                  @error('sexe')
                 <span class="text-danger">{{$message}}</span>
                    @enderror   
                  </div>
                <div class="input-control">
                  <label class="mt-2">Fillier :</label>
                <input type="text" name="fillier" id="fillier" placeholder="Entrez Fillier" class="form-control" >
                   @error('fillier')
                   <span class="text-danger">{{$message}}</span>
                     @enderror   
                </div>
                <div class="input-control">
                  <label class="mt-2">Email :</label>
                <input type="email" name="email" id="email" placeholder="Entrez email" class="form-control" autocomplete="off"  >
                   @error('email')
                   <span class="text-danger">{{$message}}</span>
                   @enderror   
                </div>
                <div class="input-control">
                  <label class="mt-2">Phone :</label>
                <input type="text" name="tel" id="tel" placeholder="Entrez Tel" class="form-control" >
                   @error('tel')
                <span class="text-danger">{{$message}}</span>
                @enderror   
              </div>
                <div class="input-control">
                  <label class="mt-2">City:</label>
                <input type="text" name="ville" id="ville" placeholder="Entrez ville" class="form-control" >
                   @error('ville')
                   <span class="text-danger">{{$message}}</span>
                   @enderror   
                </div>
                <div class="input-control">
                  <label class="mt-2">Age :</label>
                <input type="text" name="age" id="age" placeholder="Entrez age" class="form-control" >
                   @error('age')
                <span class="text-danger">{{$message}}</span>
                   @enderror   
                </div>
                <div class="input-control">
                  <label class="mt-2">Picture :</label>
                <input type="file" name="photo" id="photo"  class="form-control" >
                   @error('photo')
                <span class="text-danger">{{$message}}</span>
                @enderror   
                </div>
                <div class="input-control">
                  <label class="mt-2">Birthday :</label>
                <input type="date" name="dateN" id="dateN" placeholder="Entrez dateN" class="form-control" >
                   @error('dateN')
                <span class="text-danger">{{$message}}</span>
                   @enderror   
                </div>
                <button type="submit" class="btn btn-success mt-3">Create</button>
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
