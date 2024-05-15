@extends("layouts.app")

@section("title", "Admin - Dasboard")

@section("content")

@include("admin.navbar")

@include("components.post_form")

<h1>Hallo, Admin.  Selamat Datang !</h1>

<div class="row">
    <div class="col-6">
        <div class="card mx-1 my-1" style="width: auto;">
            <div style="width : 50px; height : 100px;"></div>
                <div class="card-body">
                    <p>25 Postingan hari ini</p>
                    <div class="row">
                        <div class="col">
                            <h3><img src="{{ asset('assets/images/event.png') }}" alt="" style="width : 30px">Acara Nobar</h3> 
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-5 text-end">
                                    <button type="button" class="btn btn-success"><a href="/watch-management" style="text-decoration : none; color: white"><img src="{{ asset('assets/images/event_edit.png') }}" alt="" style="width : 20px">Kelola</a></button>
                                </div>
                                <div class="col text-start">
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="{{ asset('assets/images/event_add.png') }}" alt="" style="width : 20px">Tambahkan Acara</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card mx-1 my-1" style="width: auto;">
            <div style="width : 50px; height : 100px;"></div>
                <div class="card-body">
                    <p>250 user registered</p>
                    <div class="row">
                        <div class="col">
                            <h3><img src="{{ asset('assets/images/users.png') }}" alt="" style="width : 30px">User Registered</h3> 
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-6 text-end">
                                    <button type="button" class="btn btn-success"><a href="/user-management" style="text-decoration : none; color: white"><img src="{{ asset('assets/images/user_manage.png') }}" alt="" style="width : 20px">Kelola</a></button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-warning"><a href="/register" style="text-decoration : none; color: white"><img src="{{ asset('assets/images/user_add.png') }}" alt="" style="width : 20px">Tambah User</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mx-1 my-1" style="width: auto; height: 350px;">
    <div class = "row">
        <div class="col">
            <div class="card p-3 m-3">
                <div class="progress mb-5" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-danger" style="width: 25%">hari ini</div>
                </div>
                <div class="progress mb-5" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-warning" style="width: 50%">7 hari terakhir</div>
                </div>
                <div class="progress mb-5" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 75%">1 bulan terakhir</div>
                </div>
                <div class="progress mb-5" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-info" style="width: 100%">1 tahun terakhir</div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 m-3">
                <div class="progress mb-5" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-warning" style="width: 50%">mei 2024</div>
                </div>
                <div class="progress mb-5" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-danger" style="width: 25%">april 2024</div>
                </div>
                <div class="progress mb-5" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-info" style="width: 100%">maret 2024</div>
                </div>
                <div class="progress mb-5" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 75%">ferbruari 2024</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection