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
        <form action="{{ url("/admin") }}" method="post">
            {!! csrf_field() !!}
            <div  class="form-group">
                <label for="id">ID Admin :</label>
                <input class="from-control" type="text" name="id" style="margin: 20px 90px;"> 
            </div>
            <div  class="form-group">
                <label for="nm_admin">Nama Admin :</label>
                <input class="from-control" type="text" name="nm_admin" style="margin: 20px 137px;"> 
            </div>
            <div  class="form-group">
                <label for="callnumber">Telepon :</label>
                <input class="from-control" type="text" name="callnumber" style="margin: 20px 60px;"> 
            </div>     
            <button type="submit" class="btn btn-primary" style="margin: 20px 0px;
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
    {{--  <script>
        function myFunction() {
          alert("Data Berhasil Tersimpan");
        }
        </script>     --}}
@endsection