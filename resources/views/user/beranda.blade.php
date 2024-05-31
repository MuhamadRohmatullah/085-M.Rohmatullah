@extends("partial.layouts.app")

@section("title", "beranda")

@section("content")

<div class="d-flex" id="wrapper">

@include('partial.page.user.sidebar')
    
    <div id="page-content-wrapper" class="bg-light">
       
        @include('partial.page.user.navbar')
        @if(request()->is('home'))
            @include('partial.page.user.main')
        @elseif(request()->is('detail'))
            @include('partial.page.user.detail')
        @endif

    </div>
</div>

@endsection