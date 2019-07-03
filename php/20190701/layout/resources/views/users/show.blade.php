@extends('layouts.layout')
@section('title','Show')
@section('header','User detail')
@section('content')
<table class="table table-bordered table-hover">
    <thead>
        <tr class="table-primary">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>password</th>
        </tr>
    </thead>
    <tbody>
  
        <tr>
            
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                {{$user->password}}
            </td>
         
</tr>
    </tbody>
</table>
<a href="{{url('/users')}}">←Back to index</a>

@endsection