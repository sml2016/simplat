@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <button type="button" class="btn btn-primary hidden-print pull-right" onClick="window.print()">Print</button>
            <h4 ckass="center-block">Lista de Guardería del 3er. Simposio de Mujeres Latinas</h4>
            <br>
            <div class="registro">
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Nombre de la Mamá</th>
                        <th>Apellido</th>       
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>En Espera</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                    </tr>
                    @foreach ($children as $key=>$child)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $child->mother->name.' '.$child->mother->last_name }}</td>
                        <td>{{ $child->last_name }}</td>
                        <td>{{ $child->name }}</td>
                        <td>{{ $child->age }}</td>
                        <td>{{ $child->waiting_list ? 'Si' : 'No' }}</td>
                        <td>{{ $child->mother->phone_number }}</td>
                        <td>{{ $child->mother->email }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
