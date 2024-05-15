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
      <th scope="col">Lokasi</th>
      <th scope="col">Seat</th>
      <th scope="col">Status</th>
      <th scope="col">Maps Link</th>
      <th  colspan="3">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>001</td>
      <td>Nobar liga champion</td>
      <td>Jl. Cidahu pasar</td>
      <td>100</td>
      <td>Free</td>
      <td>https://google.maps/jhfjshjshjdsh</td>
      <td><button type="button" class="btn btn-success me-1"><img src="{{ asset('assets/images/update.png') }}" alt="" style="width : 20px">Ubah</button><button type="button" class="btn btn-danger me-1"><img src="{{ asset('assets/images/delete.png') }}" alt="" style="width : 20px">Hapus</button><button type="button" class="btn btn-info"><img src="{{ asset('assets/images/user-hide.png') }}" alt="" style="width : 20px">Sembunyikan</button>
    </tr>
  </tbody>
</table>

@endsection