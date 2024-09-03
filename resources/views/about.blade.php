@extends('layout.app')
@section('content')
     
    
    <!-- About Start -->


    <div class="container-fluid py-5" id="about">
      <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="{{url('public/img/m.png')}}" alt="">
                </div>
            
                    
               
                <div class="col-lg-7">
                    <h3 class="mb-4">TeamLead of a IT Support Group</h3>
                    <p>{{$about->workDescription}}</p>
                    <div class="row mb-3">

                    
                        
                  
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary">{{$about->name}}</span></h6></div>
                        
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary">{{$about->degree}}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary">{{$about->workExperience}}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary">{{$about->phone}}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary">{{$about->email}}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary">{{$about->address}}</span></h6></div>
                       
                        
                    </div>
                   
                    <a href="{{route('skill')}}" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
         
    </div>

    

    <!-- About End -->

    @endsection