@extends("partial.layouts.app")

@section("title", "detail")

@section("content")

<div  class="row justify-content-center">
    <img src="{{asset($watch["image"])}}" alt="gambar" style="width : 400px">
</div>

<h3>{{ $watch["name"] }}</h3>

{{-- <img src="{{asset($location["photo"])}}" alt="gambar" style="width : 100px"> --}}

<div class="row">
    <div class="col">
        {{ $game['home_team'] }} VS {{ $game['away_team'] }}
    </div>
</div>

<div class="row">
    <div class="col">
        {{ $location["name"] }}
    </div>
    <div class="col">
        {{ $location["addres"] }}
    </div>
</div>

<div class="row">
    <div class="col">
        {{ $watch["seat"] }}
    </div>
    <div class="col">
        {{ $watch["time_open"] }}
    </div>
</div>

<div class="row">
    <div class="col">
        {{ $status["free_paid"] }}
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
        {{ $location["location_link"] }}
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

@endsection