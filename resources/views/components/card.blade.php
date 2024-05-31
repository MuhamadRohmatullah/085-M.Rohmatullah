@props([
    'name',
    'competition',
    'home',
    'away',
    'date',
    'seat',
    'status',
    'price',
    'location',
    'image'
])

<div class="card m-1" style="width: 100%; border : 0;">
    
    <div class="row justify-content-center mx-1 mt-2">
        <div class="z-3 position-absolute top-20 start-10 mt-2 ms-4"><x-price price="{{$status}}"/></div>
        <div class="z-3 position-absolute top-20 start-50 mt-2 ms-5"><button class="btn btn-warning ms-5"><img src="{{ asset('assets/images/seat.png') }}" alt="" style="width : 20px">{{$seat}}</button></div>
        <img src="{{ asset($image) }}" alt="" style=" height : 200px; border-radius: 5%;">
        <div class="z-3 position-absolute bottom-50 start-0 mb-4 ms-3"><x-price price="{{$price}}"/></div>
    </div>
    <div class="card-body">
        <h3 class="card-text">{{ $name }}</h3>
        <p class="ms-3">{{$competition}}</p>
        <p class="ms-3">{{ $home }} VS {{$away}}</p>
        <p><img src="{{ asset('assets/images/date.png') }}" alt="" style="width : 30px">{{ $date }}</p>
        <p><img src="{{ asset('assets/images/location.png') }}" alt="" style="width : 30px">{{ $location }}</p>
        {{ $slot }}
        {{-- <form action="{{route('like', ["watch_id" => $watchid])}}" method="post">
            @csrf
            <x-buttons class="btn bg-sg" image="assets/images/like.png" data-bs-toggle="modal" data-bs-target="#exampleModal"/>
        </form> --}}
    </div>
</div>