@extends('layouts.layout')
@section('title','index')
@section('header','DEMO')
@section('sub')
    
        <a class="btn btn-lg btn-primary my-2" href="{{ url('users/create') }}">
            Add user
        </a>
   
@endsection
@section('content')
<table class="table table-bordered table-hover">
    <thead>
        <tr class="table-primary">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <form action="{{ url('users/'.$user->id) }}" method="">
                    <input type="submit" value="View" class="btn btn-outline-success">
                </form>
            </td>
            <td>
                <form action="{{ url('users/'.$user->id.'/edit') }}">
                    <input type="submit" value="Edit" class="btn btn-outline-warning">
                </form>
            </td>
            <td>
                <form action="{{ url('users/'.$user->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-outline-danger">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>



@endsection