@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Edit user</h2>
            <hr>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/accounts/'.$user->id) }}">

                {!! csrf_field() !!}
                <input name="_method" type="hidden" value="PUT">

                <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Full name</label>
                    <div class="col-sm-9">
                        <input type="text" name="fullname" class="form-control" id="inputName" placeholder="Enter the full name" value="{{Request::old('fullname', $user->name)}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter the email address" value="{{Request::old('email', $user->email)}}"  required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="chanePassword" class="col-sm-3 control-label">Change Password</label>
                    <div class="col-sm-9">
                        <select name="changepassword" id="chanePassword" class="form-control">
                          <option value="0">No</option>
                          <option value="1">Yes</option>
                        </select>
                    </div>
                </div>
                <!-- 
                    Password fields
                -->
                <div id="passwordFields" style="display: none">
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputConfirm" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                            <input type="password" name="password_confirmation" class="form-control" id="inputConfirm" placeholder="Password confirmation">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ url('/admin/accounts') }}" class="btn btn-default">Cancel</a>
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
