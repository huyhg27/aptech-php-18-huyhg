@extends('layouts.layout')
@section('title','Create')
@section('header','Add user')
@section('content')
<form action="{{url('users')}}" method="post" class="form-group">
        @csrf
        <div class="form-row">
            <label class="col-form-label" for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="enter your fullname here">
        </div>
        <div class="form-row">
            <label class="col-form-label" for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="enter your email here">
        </div>
        <div class="form-row">
            <label class="col-form-label" for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="nhap pass vao day ne ku">
        </div>
        <div class="form-row mt-3">
            <input type="submit" class="btn btn-primary" value="Add">
        </div>
    </form>
    <a href="{{url('/users')}}">←Back to index</a>
@endsection