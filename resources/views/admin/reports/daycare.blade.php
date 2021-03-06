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
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>En Espera</th>
                        <th>Nombre de la Mamá</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                    </tr>
                    <?php $index = 1; ?>
                    @foreach ($children as $child)
                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $child->last_name }}</td>
                        <td>{{ $child->name }}</td>
                        <td>{{ $child->age }}</td>
                        <td>{{ $child->waiting_list ? 'Si' : 'No' }}</td>
                        <td>{{ $child->mother->name.' '.$child->mother->last_name }}</td>
                        <td>{{ $child->mother->phone_number }}</td>
                        <td>{{ $child->mother->email }}</td>
                        <?php $index++; ?>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
