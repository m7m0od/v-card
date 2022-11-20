@extends('layouts/back')

@section('title')
    Profiles
@endsection

@section('content')
<div class="row">
    @foreach($profile as $prof)       
    <div class="col-md-4">
    <div class="cardd" >
  <img src="{{asset($prof->profile_pic)}}" class="card-img-top" alt="...">
  <div class="card-body d-flex justify-content-between">
    <h5 class="card-title">{{$prof->user->username}}</h5>
    <p class="card-text">{{$prof->profile_name}}</p>
    <p class="card-text">{{$prof->jobTitle}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$prof->fb}}</li>
    <li class="list-group-item">{{$prof->github}}</li>
    <li class="list-group-item">{{$prof->email}}</li>
    <li class="list-group-item">{{$prof->linkedIn}}</li>
  </ul>
  <div class="card-body">
    <a href="{{url('/profile/'.$prof->profile_name)}}" class="card-link">view</a>
    <a href="{{url('/updateData/'.$prof->id)}}" class="card-link">update</a>
    <a href="{{url('/delete/'.$prof->id)}}" class="card-link">delete</a>
  </div>
</div>
    </div>                        
    @endforeach
</div>
@endsection