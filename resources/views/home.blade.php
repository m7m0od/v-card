@extends('layouts/layout')

@section('title')
    Home
@endsection

@section('content')

<header id="Header">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container-fluid">
            <div class="first-content w-50 VcardClass">
                <a class="navbar-brand" href="{{url('/home')}}"><ion-icon name="card-outline"></ion-icon> Vcard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="second-content collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li><a href="#business">Business</a></li>
                    <li class="active"><a href="#education">Education</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#about">About</a></li>
                    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn"><ion-icon name="person-outline"></ion-icon> Account <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            @guest
                            <a href="{{url('/signup')}}"><ion-icon name="person-circle-outline"></ion-icon> SignUp</a>
                            <a href="{{url('/login')}}"><ion-icon name="log-in-outline"></ion-icon> Login</a>
                            @endguest
                            @auth
                            <a href="{{url('/logout')}}"><ion-icon name="log-out-outline"></ion-icon> LogOut</a> 
                            @endauth
                        </div> 
                    </li>
                </ul>
                <div class="links">
                    <span class="icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
            </div>
        </div>
    </nav>
        
    <section class="bground row">
        <div class="col-md-6">
            <div class="forPosition">
                <h1>Free Business Card Maker</h1>
                <a href="{{url('/index')}}" class="mt-3 mb-2 btn btn-info">Start Designing a Business Card</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="forImgPosition">
                <img class="w-100" src="{{asset('uploads/id.jpg')}}">
            </div>
        </div>
    </section>

    <footer class="dom">
        <div class="row forMargin">
            <div class="col-md-3">
                <p class="pppo"><ion-icon name="create-outline"></ion-icon> Easy to create and customize</p>
            </div>
            <div class="col-md-3">
                <p class="pppo"><ion-icon name="cash-outline"></ion-icon> Eco-conscious, high-quality prints</p>
            </div>
            <div class="col-md-3">
                <p class="pppo"><ion-icon name="car-sport-outline"></ion-icon> Fast and free standard shipping</p>
            </div>
            <div class="col-md-3">
                <p class="pppo"><ion-icon name="happy-outline"></ion-icon> Customer happiness guarantee</p>
            </div>
        </div>
    </footer>

</header>

        
@endsection