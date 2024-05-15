@extends("layouts.app")

@section("title", "Aadmin - user management")

@section("content")

@include("admin.navbar")

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Password</th>
      <th scope="col">No Telepon</th>
      <th  colspan="3">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>001</td>
      <td>Rohmat</td>
      <td>Rohmat@gmail.com</td>
      <td>Jl. Girijaya No 24</td>
      <td>******</td>
      <td>0838123456</td>
      <td><button type="button" class="btn btn-success me-1"><img src="{{ asset('assets/images/update.png') }}" alt="" style="width : 20px">Ubah</button><button type="button" class="btn btn-danger me-1"><img src="{{ asset('assets/images/delete.png') }}" alt="" style="width : 20px">Hapus</button><button type="button" class="btn btn-info me-1"><img src="{{ asset('assets/images/user_manage.png') }}" alt="" style="width : 20px">Hak akses</button></td>
    </tr>
  </tbody>
</table>

@endsection