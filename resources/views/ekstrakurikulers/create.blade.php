@extends('layouts.master')
@section('title', 'Create Ekstrakurikuler')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ekstrakurikuler</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('ekstrakurikulers.index') }}">Ekstrakurikuler</a></li>
                    <li class="breadcrumb-item active">Create</li>
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
                <h3 class="card-title">Create Data</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('ekstrakurikulers.store') }}" method="POST" enctype="multipart/form-data">
                @CSRF
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Nama Ekstrakurikuler</label>
                                <textarea name="namaEkskul" class="form-control @error('namaEkskul') is-invalid @enderror"></textarea>
                                <small class="text-danger">@error('namaEkskul') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="ekskulImage">Foto Ekstrakurikuler</label>
                                <input type="file" name="ekskulImage" class="form-control @error('ekskulImage') is-invalid @enderror" placeholder="Foto Ekstrakurikuler">
                                <small class="text-danger">@error('ekskulImage') {{$message}} @enderror</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('ekstrakurikulers.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                        <button type="submit" class="m-1 btn btn-success">Create</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection