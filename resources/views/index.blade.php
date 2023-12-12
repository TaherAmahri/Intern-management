@extends('adminlte::page')
@section('content_header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <title>liste Stagiaire</title>
</head>
<body>
  @auth
    <div class="container ">
        <div class="row ">
          <div class="text-center">
           @if (session()->has('flash_message'))
              <div class="alert alert-success">
                <button type="button" class="close" data-bs-dismiss="alert" id="alert">X</button>
                {{session()->get('flash_message')}}
              </div>
           @endif  
          </div> 
          <div class="col-md-8 mx-auto">  
            <div class="card shadow p-2">
              <div class="card-header">
                <nav class="navbar bg-dark ">
                  <div class="container-fluid">
                    <a href="{{route('deletAll')}}" class="ms-4 btn btn-danger mb-1 ">Delete ALL</a>
                    <form class="d-flex mb-1" role="search" action="{{route('search')}}" type="get">
                      <input type="search" name="query" class="form-control me-2" style="width: 300px" placeholder="search fillier...">
                      <button class="btn btn-success" type="submit">Search</button>
                    </form>
                  </div>
                </nav>
              </div>
              <div class="card-body">
                       <table class=" table table-bordered table-hover  text-center ">
                           <thead class="text-bg-dark ">
                               <tr>
                                   <th>#</th>
                                   <th>FirstName</th>
                                   <th>LastName</th>
                                   <th>Fillier</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($stagiaires as $item)
                               <tr>
                                   <td>{{ $item->id}}</td>
                                   <td>{{ $item->prenom }}</td>
                                   <td>{{ $item->nom }}</td>
                                   <td>{{ $item->fillier }}</td>
                                   <td>
                                       <a href="{{ url('/stagiaire/' . $item->id) }}" title="View stagiaire"><button class="btn btn-warning mb-1 btn-sm"><i class="fas fa-eye" aria-hidden="true"></i></button></a>
                                       <a href="{{ url('/stagiaire/' . $item->id . '/edit') }}" title="Edit stagiaire"><button class="btn btn-success mb-1 btn-sm"><i class="fas fa-edit" aria-hidden="true"></i> </button></a>
                                       <button type="button" class="btn btn-danger btn-sm mb-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                           <i class="fas fa-trash"></i>
                                       </button>
                                       <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                           <div class="modal-dialog">
                                               <div class="modal-content">
                                                 <div class="modal-header">
                                                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Delete Stagiaire</h1>
                                                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body">
                                                    Are you sure ? 
                                                  </div>
                                                   <div class="modal-footer">
                                                     <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">close</button>
                                                     <form method="POST" action="{{ url('/stagiaire' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger  btn-sm" title="Delete stagiaire" ><i class="fas fa-trash-o" aria-hidden="true"></i>delete</button>
                                                     </form>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </td>

                               </tr>
                           @endforeach
                           </tbody>
                          </table>
        
              </div>
            </div>
          </div>
        </div>
      </div>
    @endauth   
    <script type= "text/javascript">
      $("document").ready (function()
      {
           setTimeout(function(){
              $("div.alert").remove();
           },3000);
      });
   </script>
</body>
</html>
@endsection