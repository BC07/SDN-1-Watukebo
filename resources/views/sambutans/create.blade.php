@extends('layouts.master')
@section('title', 'Create Sambutan')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sambutan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('sambutans.index') }}">Sambutan</a></li>
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
                <form action="{{ route('sambutans.store') }}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kepala Sekolah</label>
                                    <textarea name="kepalaDesc" class="form-control @error('kepalaDesc') is-invalid @enderror" placeholder="Deskripsi Kepala Sekolah"></textarea>
                                    <small class="text-danger">@error('kepalaDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="guruImage">Foto Kepala Sekolah</label>
                                    <input type="file" name="kepalaImage" class="form-control @error('kepalaImage') is-invalid @enderror" placeholder="Foto Kepala Sekolah">
                                    <small class="text-danger">@error('kepalaImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Guru</label>
                                    <textarea name="guruDesc" class="form-control @error('guruDesc') is-invalid @enderror" placeholder="Deskripsi Guru"></textarea>
                                    <small class="text-danger">@error('guruDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="guruImage">Foto Guru</label>
                                    <input type="file" name="guruImage" class="form-control @error('guruImage') is-invalid @enderror" placeholder="Foto Guru">
                                    <small class="text-danger">@error('guruImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('sambutans.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
