@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Participantes</h1>
            <hr>
                <a class="btn btn-primary" href="{{ url('/admin/attendees/create') }}">Agregar</a>
                <!-- 
                    <a class="btn btn-danger confirmation" href="{{ url('/admin/attendees/deleteAll') }}">Borrar Todos</a>
                 -->
            <br>
            <br>
            <h4>Mujeres registradas: {{ $attendeesCount }}</h4>
            <table class="table table-hover">
                <tr>
                    <th>Nombre</th>
                    <th class="hidden-xs">Correo electronico</th> 
                    <th class="hidden-xs">Teléfono</th> 
                    <th class="">Niños</th> 
                    <th>Lista de espera</th> 
                    <th>Editar</th> 
                    <th>Borrar</th> 
                </tr>
                @foreach ($attendees as $attendee)
                    <tr onclick="document.location = '{{ url('/admin/attendees/' . $attendee->id) }}';">
                        <td>{{ $attendee->name }} {{ $attendee->last_name }}</td>
                        <td class="hidden-xs">{{ $attendee->email }}</td>
                        <td class="hidden-xs">{{ $attendee->phone_number }}</td>
                        <td class="">{{ $attendee->children->count() }}</td>
                        <td>{{ $attendee->waiting_list ? 'Yes' : 'No' }}</td>
                        <td class="stopPropagation"><a href="{{ url('/admin/attendees/' . $attendee->id . '/edit') }}">Editar</a></td>
                        <td class="stopPropagation"><a class="confirmation" href="{{ url('/admin/attendees/' . $attendee->id . '/delete') }}">Borrar</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
