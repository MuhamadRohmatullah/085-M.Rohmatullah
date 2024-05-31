<div class="card" style="width : cover">
<div  class="row justify-content-center">
    <img src="{{asset($watch["image"])}}" alt="gambar" style="width : 400px">
</div>

<div class="container">
<h3>{{ $watch["name"] }}</h3>

<div class="row">
    <div class="col">
        {{ $game['home_team'] }} VS {{ $game['away_team'] }}
    </div>
</div>

<div class="row">
    <div class="col">
        <img src="{{ asset('assets/images/location.png') }}" alt="" style="width : 30px"><a href="{{ $location["location_link"] }}">{{ $location["name"] }}</a>
    </div>
    <div class="col">
        {{ $location["addres"] }}
    </div>
</div>

<div class="row">
    <div class="col">
        <img src="{{ asset('assets/images/seat.png') }}" alt="" style="width : 30px"> {{ $watch["seat"] }}
    </div>
    <div class="col">
        {{ $watch["time_open"] }}
    </div>
</div>

<div class="row">
    <div class="col">
        <x-price price="{{$status["free_paid"]}}"/>
    </div>
    <div class="col">
        {{ $status["price"] }}
    </div>
</div>

<div class="row">
    <div class="col">
        {{ $status["person"] }}
    </div>
</div>

<div class="row">
    <div class="col">
        
    </div>
    <div class="col">
        {{ $game['date'] }}
    </div>
</div>

<div class="row">
    <div class="col">
        {{ $game['kickoff'] }}
    </div>
    <div class="col">
        {{ $game['competition'] }}
    </div>
</div>
</div>
</div>