@extends("partial.layouts.app")

@section("title", "beranda")

@section("content")

<div class="d-flex" id="wrapper">

{{-- @include('partial.page.user.sidebar') --}}
    
    <div id="page-content-wrapper" class="bg-light">

        @include('partial.page.user.navbar')

        {{-- @include('partial.page.user.mymain') --}}

        @include('user.user_profile')
       

    </div>
</div>

@endsection