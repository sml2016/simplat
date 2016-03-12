@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Accounts</h2>
            <hr>
            @if($userupdated == true)
                <div class="alert alert-success">Usuario actualizado!</div>
            @endif
            @if($userdeleted == true)
                <div class="alert alert-success">Usuario borrado!</div>
            @endif
            <a class="btn btn-primary" href="{{ url('/admin/accounts/create') }}">Agregar</a>
            <br>
            <br>
            <table class="table table-hover">
                <tr>
                    <th>Full name</th>
                    <th>Email</th> 
                    <th>Edit</th> 
                    <th>Delete</th> 
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ url('/admin/accounts/' . $user->id . '/edit') }}">Editar</a></td>
                        @if ( Auth::user()->id != $user->id)
                            <td><a class="confirmation" href="{{ url('/admin/accounts/' . $user->id . '/delete') }}">Borrar</a></td>
                        @else
                            <td></td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
