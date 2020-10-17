@extends('layouts.app')
@section('content')

<div class="alert alert-warning alert-dismissible fade show" role="alert">
        
    <strong>HELLO WORLD!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div class="container">
    <div class="row">
        <a href="{{ url("customer/create") }}" class="btn btn-success">ADD NEW</a>
<a href="{{ url("/") }}" class="btn" style="color: rgb(255, 255, 255);background-color: orange;border-color: #c48614;float: right;color: #fff;">BACK TO HOME MENU</a>
   
{{--  cari  --}}
    <form action="{{ url("/customer") }}" class="form-inline" method="GET" style="margin: 20px 0px">
        <div class="form-group mx-sm-3 mb-2">
        <input value="{{Request::get('keyword') }}" name="keyword" type="text" class="form-control" placeholder="Cari data">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search</button>
    </form>
{{--  /cari  --}}

<div class="row">
        <div class="col-md-12">
            <div class="full-right">
                <h2>TIKET PESAWAT </h2>
            </div>
        </div>
    </div>
    
   
    <table class="table table-striped">
        <thead>
        <tr>
            <th>CUSTOMER ID :</th>
            <th>CUSTOMER NAME :</th>
            <th>LANDING FROM :</th>
            <th>ARRIVE :</th>
            <th>AIRLINES :</th>
        </tr>

        </thead>

        <tbody>
            @foreach ($pelanggans as $pelanggan)
            <tr>
            <td>{{ $pelanggan->id }}</td>
            <td>{{ $pelanggan->nama }}</td>
            <td>{{ $pelanggan->pemberangkatan }}</td>
            <td>{{ $pelanggan->arrive }}</td>
            <td>{{ $pelanggan->maskapai }}</td>
            <td>
                <a class="btn btn-primary" href="{{ url("pelanggans/{$pelanggan->id}/edit") }}">EDIT DATA</a>
            </td>
            <td>
                <form action="{{ url("pelanggans/{$pelanggan->id}") }}" method="post">
                {!! csrf_field() !!}
                {{ method_field('DELETE') }}
                    <button onclick="myFunction()" class="btn btn-danger">DELETE</button>
                </form>
            </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
</div>
<script>
    function myFunction() {
      alert("Data Berhasil Dihapus");
    }
    </script>
@endsection
