@extends('partial.layouts.landing')

@section("title", "IBRA")

@section("content")

<nav class="navbar navbar-expand-lg navbar-dark bg-warning" id="home">
    <div class="container px-5">
        <a class="navbar-brand" href="#!"><img src="{{ asset('assets/images/ball.png') }}" alt="" style="width : 70px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#features">Nobar</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
        
            </ul>
        </div>
    </div>
</nav>
<!-- Header-->
<header class="bg-warning py-5">
    <div class="container-fluid px-5" style="height: 480px;">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center my-5">
                    <h1 class="display-5 fw-bolder text-white mb-2">Temukan Acara Nobar Klub Favorit anda</h1>
                    <p class="lead text-white-50 mb-4">Pengen Nobar tapi gak ada temen ? Temukan acara nobar komunitas bola di sekitar anda</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-light btn-lg px-4 me-sm-3" href="#features">Temukan</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="/signin">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Features section-->
<section class="py-5 border-bottom" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            @foreach($watch as $match)
            <div class="col-4 px-1 padding-0">
                <a href="/signup" style="text-decoration : none; color : black;">
                    <x-card 
                    name="{{$match['watch_name']}}"
                    competition="{{$match['competition']}}" 
                    home="{{$match['home_team']}}"
                    away="{{$match['away_team']}}"
                    date="{{$match['date']}}"
                    status="{{$match['free_paid']}}"
                    price="{{$match['price']}}"
                    image="{{$match['image']}}"
                    location="{{$match['addres']}}"
                    seat="{{$match['seat']}}"
                    />
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Pricing section-->
<section class="bg-light py-5 border-bottom">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <!-- Pricing card free-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                       
                    </div>
                </div>
            </div>
            <!-- Pricing card pro-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        
                    </div>
                </div>
            </div>
            <!-- Pricing card enterprise-->
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body p-5">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section-->

<!-- Contact section-->

<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; <img src="{{ asset('assets/images/ball.png') }}" alt="" style="width : 30px"> 2024</p></div>
</footer>

@endsection