@extends('layouts.layout')
@section('title','Show')
@section('header','User edit')
@section('content')
    <form action="{{url('users/'.$user->id)}}" method="post" class="form-group">
        @csrf
        @method('put')
        <div class="form-row">
            <label class="col-form-label" for="">Name</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control">
        </div>
        <div class="form-row">
            <label class="col-form-label" for="">Email</label>
            <input type="email" name="email" value="{{$user->email}}" class="form-control">
        </div>
        <div class="form-row mt-3">
            <input type="submit" class="btn btn-primary" value="save">
        </div>
    </form>
    <a href="{{url('/users')}}">←Back to index</a>
@endsection