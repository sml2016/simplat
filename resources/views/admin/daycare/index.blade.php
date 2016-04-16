@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Daycare</h1>
            <hr>
            <table class="table table-hover">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th> 
                    <th>Edad</th> 
                    <th>Sexo</th> 
                    <th>Lista de espera</th> 
                    <th>Editar</th> 
                    <th>Borrar</th> 
                </tr>
                @foreach ($children as $child)
                    <tr onclick="document.location = '{{ url('/admin/daycare/' . $child->id) }}';">
                        <td>{{ $child->name }}</td>
                        <td>{{ $child->last_name }}</td>
                        <td>{{ $child->age }}</td>
                        <td>{{ $child->sex ? 'F' : 'M' }}</td>
                        <td>{{ $child->waiting_list ? 'Si' : 'No' }}</td>
                        <td class="stopPropagation"><a href="{{ url('/admin/daycare/' . $child->id . '/edit') }}">Editar</a></td>
                        <td class="stopPropagation"><a class="confirmation" href="{{ url('/admin/daycare/' . $child->id . '/delete') }}">Borrar</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
