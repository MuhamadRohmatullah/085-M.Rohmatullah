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
        @elseif(request()->is('free'))
            @include('partial.page.user.main')
        @elseif(request()->is('pay'))
            @include('partial.page.user.main')
        @endif

    </div>
</div>

@endsection