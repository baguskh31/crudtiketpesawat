@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 offsett-sm-2">
            <h2 class="display-6">TAMBAH DATA BARU</h2>
        </div>    
        </div>
    </div>
    <div class="container">
    <div class="row">
        <style>

          </style>  
        <div class="col-md-8 offsett-sm-2">
        <form action="{{ url("/customer") }}" method="post">
            {!! csrf_field() !!}
            <div  class="form-group">
                <label for="id">ID Pengguna :</label>
                <input class="from-control" type="text" name="id" style="margin: 20px 90px;"> 
            </div>
            <div  class="form-group">
                <label for="nama">Nama :</label>
                <input class="from-control" type="text" name="nama" style="margin: 20px 137px;"> 
            </div>
            <div  class="form-group">
                <label for="pemberangkatan">Pemberangkatan :</label>
                <input class="from-control" type="text" name="pemberangkatan" style="margin: 20px 60px;"> 
            </div>     
            <div  class="form-grup">
                <label for="arrive">Tujuan :</label>
                <input class="from-control" type="text" name="arrive" style="margin: 20px 128px;"> 
            </div>
            <div  class="form-grup">
                <label for="maskapai">Nama Maskapai :</label>
                <input class="from-control" type="text" name="maskapai" style="margin: 20px 71px;"> 
            </div>
            <button onclick="myFunction()" type="submit" class="btn btn-primary" style="margin: 20px 0px;
            padding: 5px 160px;">SAVE</button>
            <input type="reset" value="Reset" style="padding: 5px 50px;
            margin: 0px 40px;
            background-color: #bf5329;
            border-color: #aa4a24;
            color:white;
            border-radius: 5px;">
        </form>
        </div>
    </div> 
    </div>    
    <script>
        function myFunction() {
          alert("Data Berhasil Tersimpan");
        }
        </script>   
@endsection