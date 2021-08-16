@extends('layouts.master')
@section('title', 'Create Sekolah')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sekolah</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('sekolah.index') }}">Sekolah</a></li>
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
                <form action="{{ route('sekolah.store') }}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="sekolahImage">Foto</label>
                                    <input type="file" name="sekolahImage" class="form-control @error('sekolahImage') is-invalid @enderror" placeholder="Foto">
                                    <small class="text-danger">@error('sekolahImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi</label>
                                    <textarea name="sekolahDesc" class="form-control @error('sekolahDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('sekolahDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('sekolah.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
