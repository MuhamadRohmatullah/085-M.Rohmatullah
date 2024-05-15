@extends("layouts.app")

@section("title", "Register user")

@section("content")

<div class="container-fluid">
    <h3 class="text-center"><img src="{{ asset('assets/images/user_add.png') }}" alt="" style="width : 30px">Form Regisration</h3>
    <div class="card px-2 mb-3">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Input Your name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="inputDate" class="form-label">Date of birth</label>
            <input type="date" id="inputDate" class="form-control" aria-describedby="passwordHelpBlock">
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Male
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>    
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">Phone Number</label>
            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="+62">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
        </div>
        <div class="text-center mb-2">
            <button type="button" class="btn btn-primary" style="width : 50%;">Register</button>
        </div>
    </div>
</div>

@endsection