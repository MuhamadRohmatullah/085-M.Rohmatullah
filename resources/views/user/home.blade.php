@extends("layouts.app")

@section("title", "Home page")

@section("content")

@include("components.navbar_home")
@include("components.post_form")

<div class="container-fluid">

    <div class="card px-2 mt-2" style="width : 17%; height : 100px">
        <p class="fw-bold">Bagikan acara nobar anda</p>
        <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="{{ asset('assets/images/post.png') }}" alt="" style="width : 35px"></button>
    </div>

    <div class="row mx-1 mt-1">
        <div class="col-10">
            <h4>Jadwal Nobar</h4>
        </div>
        <div class="col">
            <div class="row">
                <div class= "col ms-3">
                    <img src="{{ asset('assets/images/filter.png') }}" alt="" style="width : 20px">filter
                </div>
                <div class="col">
                    <select style="width : 100px;" class="form-select form-select-sm me-auto" aria-label="Small select example">
                        <option selected></option>
                        <option value="1">Free</option>
                        <option value="2">Pay</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        @for($i=0; $i< 6; $i++)
            <div class="col-4">
                <div class="card mx-1 my-1 shadow-sm" style="width: auto;">
                    <div style="width : 50px; height : 100px;"></div>
                    <div class="card-body">
                        <h5 class="card-text">Nobar Final liga Champions {{ $i+1 }}</h5>
                        <p>Real Madrid VS Borusia Dortmun</p>
                        <p><img src="{{ asset('assets/images/date.png') }}" alt="" style="width : 20px">2-06-2024  <strong><img src="{{ asset('assets/images/seat.png') }}" alt="" style="width : 20px">50 Seat</strong>  <button type="button" class="btn btn-success btn-sm">free</button></p>
                        <p><a href="https://g.co/kgs/DTNjE3S" style="text-decoration : none; color: black"><img src="{{ asset('assets/images/location.png') }}" alt="" style="width : 20px">Gedung serbaguna, Sukabumi</a></p>
                        <button type="button" class="btn btn-warning"><img src="{{ asset('assets/images/like.png') }}" alt="" style="width : 20px"></button>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>

@endsection