@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
       
<a href="{{ url("/") }}" class="btn" style="color: rgb(255, 255, 255);background-color: orange;border-color: #c48614;float: right;color: #fff;">BACK TO HOME MENU</a>
   
{{--  cari  --}}
    <form action="{{ url("/admin") }}" class="form-inline" method="GET">
        <div class="form-group mx-sm-3 mb-2">
        <input value="{{Request::get('keyword') }}" name="keyword" type="text" class="form-control" placeholder="Cari data">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search</button>
    </form>
{{--  /cari  --}}

<div class="row">
        <div class="col-md-12">
            <div class="full-right">
                
                <h2>ADMIN TIKET PESAWAT</h2>
                <a href="{{ url("admin/create") }}" class="btn btn-success">ADD NEW</a> 
            </div>
        </div>
    </div>
    
   
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ADMIN ID :</th>
            <th>ADMIN NAME :</th>
            <th>TELEPHONE</th>

        </tr>

        </thead>

        <tbody>
            @foreach ($admins  as $admin)
            <tr>
            <td>{{ $admin->id }}</td>
            <td>{{ $admin->nm_admin }}</td>
            <td>{{ $admin->callnumber }}</td>
            
            <td>
                <a class="btn btn-primary"href="{{ url("admins/{$admin->id}/edit") }}">EDIT DATA</a>
            </td>
            <td>
                <form action="{{ url("admins/{$admin->id}") }}" method="post">
                {!! csrf_field() !!}
                {{ method_field('DELETE') }}
                    <button class="btn btn-danger">DELETE</button>
                </form>
            </td>

        </tr>

            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection
