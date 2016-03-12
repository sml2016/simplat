@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>{{ $attendee->name }} {{ $attendee->last_name }}</h2>
            <hr>
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Correo electrónico:</label>
                    <div class="col-sm-9">
                        <label class="control-label">{{ $attendee->email }}</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Teléfono:</label>
                    <div class="col-sm-9">
                        <label class="control-label">{{ $attendee->phone_number }}</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Lista de espera:</label>
                    <div class="col-sm-9">
                        <label class="control-label">{{ $attendee->waiting_list ? 'Yes' : 'No' }}</label>
                    </div>
                </div>
                @if ($children->count() > 0)
                    @foreach ($children as $key=>$child)
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Niño {{$key +1}}:</label>
                            <div class="col-sm-9">
                                <a href="{{url('/admin/daycare/' . $child->id)}}">{{ $child->name }} {{ $child->last_name }} -</a>
                                <a href="{{url('/admin/daycare/' . $child->id . '/delete')}}" class="confirmation btn btn-danger btn-sm">delete</a>
                            </div>
                        </div>
                    @endforeach
                @endif
                @if ($children->count() < 2)
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <a href="{{ url('/admin/attendees') }}">Agregar niño a guarderia</a>
                        </div>
                    </div>
                @endif
                <!-- 
                    Edit and Back buttons
                -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <a href="{{ url('/admin/attendees/'.$attendee->id.'/edit') }}" class="btn btn-primary">Editar</a>
                        <a href="{{ url('/admin/attendees') }}" class="btn btn-default">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
