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
        <form action="{{ url("/admin/{$admins->id}") }}" method="post">
            {{ method_field('PATCH') }}
            {!! csrf_field() !!}
            <div  class="form-group">
                <label for="id">ID Pengguna :</label>
                <input value="{{ $admins->id }}" class="from-control" type="text" name="id" style="margin: 20px 90px;"> 
            </div>
            <div  class="form-group">
                <label for="nm_admin">Nama :</label>
                <input value="{{ $admins->nm_admin }}" class="from-control" type="text" name="nm_admin" style="margin: 20px 137px;"> 
            </div>
            <div  class="form-group">
                <label for="callnumber">Pemberangkatan :</label>
                <input value="{{ $admins->callnumber }}" class="from-control" type="text" name="callnumber" style="margin: 20px 60px;"> 
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