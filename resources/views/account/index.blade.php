@extends('layouts.master')
@section('title', 'Admins')
@section('content')


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>
<!-- /.content-header -->

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <!-- <div class="text-center">
                <h2 class="fw-bolder">ADMIN</h2>
            </div> -->

            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">Data table of tabel Admin</h3>
                    <a href="{{ route('account.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i>
                        Create</a>
                </div>
            </div>

            <div class=" mt-5">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
            </div>
            <thead>
                <th>No</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </thead>

            <tbody>
                @foreach($admin as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->password}}</td>
                    <td>
                        <a href="{{route('account.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                        <form method="POST" action="{{ route('account.destroy', [$data->id]) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection