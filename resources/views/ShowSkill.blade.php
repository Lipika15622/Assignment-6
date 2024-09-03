@extends('layout.app')
@section('content')
    



    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">{{$skill['tittle']}}</h1>
                <h1 class="position-absolute text-uppercase text-primary">{{$skill['tittle']}}</h1>
            </div>
            <div class="row align-items-center">
               
               
                   
                    
                    
                        <p>{{$skill['description']}}</p>
                      
                  
                    
                    <a href="{{route('skill')}}" class="btn btn-outline-primary" >Skills</a>
                </div>
            </div>
        </div>
    </div>

 
@endsection