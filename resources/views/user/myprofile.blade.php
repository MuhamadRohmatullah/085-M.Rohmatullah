@extends('layouts.app')

@section("title", "My Profile")

@section("content")

@include("components.navbar_home")

<div class="card px-2 mb-3 m-1">

    <div class="row justify-content-center">
        <div class="col-2 mb-3 mt-3">
            <div class="card pt-5" style=" width : 150px; height : 135px;">
                <div class="mt-5">
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="row">
            <div class="col-3">
                 <label for="exampleFormControlInput1" class="form-label">Name</label>
            </div>
            <div class="col">
                 <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Input Your name" value="Rohmat">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="row">
                <div class="col-3">
                    <label for="exampleFormControlInput2" class="form-label">Email</label>
                </div>
                <div class="col">
                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" value="rohmat@gmail.com">
                </div>
            </div>
        </div>
    <div class="mb-3">
        <div class="row">
                <div class="col-3">
                    <label for="inputDate" class="form-label">Date of birth</label>
                </div>
                <div class="col">
                    <input type="date" id="inputDate" class="form-control" aria-describedby="passwordHelpBlock" value="<?php echo date('2001-04-10'); ?>">
                </div>
        </div>    
    </div>
    <div class="mb-3">
        <div class="row">
            <div class="col-4">
                Gender
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                            Male
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="row">
            <div class="col-3">
                <label for="exampleFormControlInput3" class="form-label">Phone Number</label>
            </div>
            <div class="col">
                <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="+62" value="+62812345678">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="row">
            <div class="col-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
            </div>
            <div class="col">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" >Jl. Padepokan Girijaya, No 21, Girijaya, Cidahu</textarea>
            </div>
        </div> 
    </div>
    <div class="mb-3">
        <div class="row">
            <div class="col-3">
                <label for="inputPassword5" class="form-label">Password</label>
            </div>
            <div class="col">
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" value="Test4321">
            </div>
        </div> 
    </div>
    <div class="text-center mb-2">
        <button type="button" class="btn btn-primary" style="width : 50%;"><img src="{{ asset('assets/images/save.png') }}" alt="" style="width : 20px">Save</button>
    </div>
    
</div>

@endsection