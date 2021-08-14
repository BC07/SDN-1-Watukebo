@extends('layouts.master')
@section('title', 'Create')
@section('content')

<div class="container">
    <form action="{{route('account.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" id="" required>
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input class="form-control" type="text" name="username" id="" required>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" type="password" name="password" id="" required>
        </div>
        <a href="{{route('account.index')}}">BACK</a>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>

@endsection