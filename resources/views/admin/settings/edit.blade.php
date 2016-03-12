@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Editar configuración</h2>
            <hr>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/settings') }}">

                {!! csrf_field() !!}
                <input name="_method" type="hidden" value="PUT">

                <div class="form-group">
                    <label for="inputAttendees" class="col-sm-3 control-label">Numero de participantes</label>
                    <div class="col-sm-9">
                        <input type="text" name="numberAttendees" class="form-control" id="inputAttendees" placeholder="Cuantos participantes en el simposium" value="{{Request::old('numberAttendees', $settings->number_of_attendees)}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Guarderia:</label>
                    <div class="col-sm-9">
                        <label class="control-label"></label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputChildren" class="col-sm-3 control-label">Limite de niños</label>
                    <div class="col-sm-9">
                        <input type="text" name="numberChildren" class="form-control" id="inputChildren" placeholder="Cuantos niños en la guarderia?" value="{{Request::old('numberChildren', $settings->daycare_limit)}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMinAge" class="col-sm-3 control-label">Edad minima</label>
                    <div class="col-sm-9">
                        <select name="minAge" id="inputMinAge" class="form-control">
                            @for($age = 0 ; $age <= 17; $age++)
                                @if($age ==  $settings->daycare_min_age)
                                    <option value="{{$age}}" selected>{{$age}}</option>
                                @else
                                    <option value="{{$age}}">{{$age}}</option>
                                @endif
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputManAge" class="col-sm-3 control-label">Edad maxima</label>
                    <div class="col-sm-9">
                        <select name="maxAge" id="inputMaxAge" class="form-control">
                            @for($age = 0 ; $age <= 17; $age++)
                                @if($age ==  $settings->daycare_max_age)
                                    <option value="{{$age}}" selected>{{$age}}</option>
                                @else
                                    <option value="{{$age}}">{{$age}}</option>
                                @endif
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ url('/admin') }}" class="btn btn-default">Cancel</a>
                    </div>
                </div>
            </form>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
