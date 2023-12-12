@extends('adminlte::page')
@section('content_header')
@auth
<div class="container p-5" >
    <div class="row ">
        <div class="col-md-4">
            <div class="small-box bg-info">
                <div class="inner ">
                    <h1 class="font-weight-bold">{{App\Models\Stagiaire::count()}}</h1>
                    <h5>Stagiaires</h5>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{url('stagiaire')}}" class="small-box-footer">more info
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
 
   
</div>    
@endauth

@endsection
