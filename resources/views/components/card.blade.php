@props([
    'name',
    'competition',
    'home',
    'away',
    'date',
    'seat',
    'status',
    'location',
    'image'
])

<div class="card m-1 shadow-sm" style="width: 100%;">
    <div class="row justify-content-end">
        <div class="col-2">
            <x-price price="{{$status}}"/>
        </div>
    </div>
    <div class="row justify-content-center mx-1">
        <img src="{{ asset($image) }}" alt="" style=" height : 200px">
    </div>
    <div class="card-body">
        <h5 class="card-text">{{ $name }}</h5>
        <p>{{$competition}}</p>
        <p>{{ $home }} VS {{$away}}</p>
        <p><img src="{{ asset('assets/images/date.png') }}" alt="" style="width : 20px">{{ $date }}<strong><img src="{{ asset('assets/images/seat.png') }}" alt="" style="width : 20px">{{$seat}} Seat</strong></p>
        <p><img src="{{ asset('assets/images/location.png') }}" alt="" style="width : 20px">{{ $location }}</p>
        <x-buttons class="btn bg-sg" image="assets/images/like.png" data-bs-toggle="modal" data-bs-target="#exampleModal"/>{{ $slot }}
    </div>
</div>