@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Daycare</h1>
            <hr>
            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th>Last name</th> 
                    <th>Age</th> 
                    <th>Sex</th> 
                    <th>Edit</th> 
                    <th>Delete</th> 
                </tr>
                @foreach ($children as $child)
                    <tr onclick="document.location = '{{ url('/admin/daycare/' . $child->id) }}';">
                        <td>{{ $child->name }}</td>
                        <td>{{ $child->last_name }}</td>
                        <td>{{ $child->age }}</td>
                        <td>{{ $child->sex ? 'Female' : 'Male' }}</td>
                        <td class="stopPropagation"><a href="">Edit</a></td>
                        <td class="stopPropagation"><a class="confirmation" href="{{ url('/admin/daycare/' . $child->id . '/delete') }}">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
