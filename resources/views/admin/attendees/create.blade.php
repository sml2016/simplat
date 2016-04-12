@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Agregar participante</h2>
            <hr>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/attendees') }}">

                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter name" value="{{Request::old('name')}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputLastName" class="col-sm-2 control-label">Last name</label>
                    <div class="col-sm-10">
                        <input type="text" name="lastname" class="form-control" id="inputLastName" placeholder="Enter last name" value="{{Request::old('lastname')}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter the email address" value="{{Request::old('email')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPhone" class="col-sm-2 control-label">Phone number</label>
                    <div class="col-sm-10">
                        <input type="text" name="phonenumber" class="form-control" id="inputPhone" placeholder="Enter phone number" value="{{Request::old('phonenumber')}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDaycareNumber" class="col-sm-2 control-label">Day care</label>
                    <div class="col-sm-10">
                        <select name="daycarenumber" id="daycarenumber" class="form-control">
                          <option value="0">No</option>
                          <option value="1">One child</option>
                          <option value="2">Two children</option>
                        </select>
                    </div>
                </div>
                <!-- 
                    Child 1
                -->
                <div class="childOneForm" style="display: none">
                    <div class="form-group">
                        <label for="child1Label" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <label id="child1Label">Child 1 registration</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputChild1Name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="child1name" class="form-control" id="inputChild1Name" maxlength="60" placeholder="Enter name" value="{{Request::old('child1name')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputChild1LastName" class="col-sm-2 control-label">Last name</label>
                        <div class="col-sm-10">
                            <input type="text" name="child1lastname" class="form-control" id="inputChild1LastName" maxlength="60" placeholder="Enter last name" value="{{Request::old('child1lastname')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="child1Sex" class="col-sm-2 control-label">Sex</label>
                        <div class="col-sm-10">
                            <select name="child1sex" id="child1Sex" class="form-control">
                              <option value="0">Male</option>
                              <option value="1">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="child1Age" class="col-sm-2 control-label">Age</label>
                        <div class="col-sm-10">
                            <select name="child1age" id="child1Age" class="form-control">
                                @for($age = $settings->daycare_min_age ; $age <= $settings->daycare_max_age ; $age++)
                                  <option value="{{$age}}">{{$age}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>

                <!-- 
                    Child 2
                -->
                <div class="childTwoForm" style="display: none">
                    <div class="form-group">
                        <label for="child1Label" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <label id="child1Label">Child 2 registration</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputChild2Name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="child2name" class="form-control" id="inputChild2Name" maxlength="60" placeholder="Enter name" value="{{Request::old('child2name')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputChild2LastName" class="col-sm-2 control-label">Last name</label>
                        <div class="col-sm-10">
                            <input type="text" name="child2lastname" class="form-control" id="inputChild2LastName" maxlength="60" placeholder="Enter last name" value="{{Request::old('child2lastname')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="child2Sex" class="col-sm-2 control-label">Sex</label>
                        <div class="col-sm-10">
                            <select name="child2sex" id="child2Sex" class="form-control">
                              <option value="0">Male</option>
                              <option value="1">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="child2Age" class="col-sm-2 control-label">Age</label>
                        <div class="col-sm-10">
                            <select name="child2age" id="child2Age" class="form-control">
                                @for($age = $settings->daycare_min_age ; $age <= $settings->daycare_max_age ; $age++)
                                  <option value="{{$age}}">{{$age}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>

                <!-- 
                    Add and Cancel buttons
                -->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="{{ url('/admin/attendees') }}" class="btn btn-default">Cancel</a>
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
