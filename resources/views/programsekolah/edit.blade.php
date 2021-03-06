@extends('layouts.master')
@section('title', 'Edit Program')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Program</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('programsekolah.index') }}">Program</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('programsekolah.update', [$programsekolah->id]) }}" method="POST"
                enctype="multipart/form-data">
                @CSRF
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="umum">Program Jangka Pendek</label>
                                <textarea name="umum" class="form-control @error('umum') is-invalid @enderror"
                                    value="{{$programsekolah->umum}}">{{$programsekolah->umum}}</textarea>
                                <small class="text-danger">@error('umum') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="jangkapanjang">Program Jangka Panjang</label>
                                <textarea name="jangkapanjang"
                                    class="form-control @error('jangkapanjang') is-invalid @enderror"
                                    placeholder="Program Jangka Panjang"
                                    value="{{$programsekolah->jangkapanjang}}">{{$programsekolah->jangkapanjang}}</textarea>
                                <small class="text-danger">@error('jangkapanjang') {{$message}} @enderror</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('programsekolah.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                        <button type="submit" class="m-1 btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection