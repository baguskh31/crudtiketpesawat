@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
        <div class="col-md-12">
            <div class="full-right">
                <h2>ADMIN TIKET PESAWAT </h2>
            </div>
        </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ADMIN ID :</th>
            <th>ADMIN NAME :</th>
            <th>TELEPHONE :</th>
        </tr>

        </thead>

        <tbody>
            @foreach ($admins as $admin)
            <tr>
            <td>{{ $admin->id_admin }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection
