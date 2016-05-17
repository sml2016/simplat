@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <button type="button" class="btn btn-primary hidden-print pull-right" onClick="window.print()">Print</button>
            <h4 ckass="center-block">Lista de Registradas del 3er. Simposio de Mujeres Latinas</h4>
            <br>
            <div class="registro">
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Apellido</th>       
                        <th>Nombre</th>
                        <th>Niños</th>
                        <th>Niños en Espera</th>
                        <th>Teléfono</th>
                        <th>Email</th> 
                    </tr>
                    <?php $index = 1; ?>
                    @foreach ($attendees as $attendee)
                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $attendee->last_name }}</td>
                        <td>{{ $attendee->name }}</td>
                        <td>{{ $attendee->children->count() }}</td>
                        <td>{{ $attendee->childrenWaitingList->count() }}</td>
                        <td>{{ $attendee->phone_number }}</td>
                        <td>{{ $attendee->email }}</td>
                        <?php $index++; ?>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
