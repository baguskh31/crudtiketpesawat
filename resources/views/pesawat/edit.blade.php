@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offsett-sm-2">
            <h2 class="display-6">EDIT DATA</h2>
        </div>
    </div>
</div>    
    <div class="container">
    <div class="row">
        <div class="col-md-8 offsett-sm-2">
        <form action="{{ url("/customer/{$pelanggans->id}") }}" method="post">
            {{ method_field('PATCH') }}
            {!! csrf_field() !!}
            <div  class="form-group">
                <label for="id">ID Pengguna :</label>
                <input value="{{ $pelanggans->id }}" class="from-control" type="text" name="id" style="margin: 20px 90px;"> 
            </div>
            <div  class="form-group">
                <label for="nama">Nama :</label>
                <input value="{{ $pelanggans->nama }}" class="from-control" type="text" name="nama" style="margin: 20px 137px;"> 
            </div>
            <div  class="form-group">
                <label for="pemberangkatan">Pemberangkatan :</label>
                <input value="{{ $pelanggans->pemberangkatan }}" class="from-control" type="text" name="pemberangkatan" style="margin: 20px 60px;"> 
            </div>     
            <div  class="form-grup">
                <label for="arrive">Tujuan :</label>
                <input value="{{ $pelanggans->arrive }}" class="from-control" type="text" name="arrive" style="margin: 20px 128px;"> 
            </div>
            <div  class="form-grup">
                <label for="maskapai">Nama Maskapai :</label>
                <input value="{{ $pelanggans->maskapai }}" class="from-control" type="text" name="maskapai" style="margin: 20px 71px;"> 
            </div>
            <button type="submit" onclick="myFunction()" class="btn btn-primary">SAVE</button>
        </form>
        </div>
    </div>
    </div>     
    <script>
        function myFunction() {
          alert("Data Berhasil Di Edit");
        }
        </script>   
        
@endsection