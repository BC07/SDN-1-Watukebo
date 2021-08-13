@extends('layouts.master')
@section('title', 'Edit Sambutan')
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
                <form action="{{ route('sambutans.update', [$sambutans->id]) }}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    @method('put')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kepalaDesc">Deskripsi Kepala Sekolah</label>
                                    <textarea name="kepalaDesc" class="form-control @error('kepalaDesc') is-invalid @enderror" value="{{$sambutans->kepalaDesc}}"></textarea>
                                    <small class="text-danger">@error('kepalaDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kepalaImage">Foto Kepala Sekolah</label>
                                    <input type="file" name="kepalaImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$sambutans->kepalaImage}}">
                                    <img src="{{ asset('images/sambutanKepala/'.$sambutans->kepalaImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('kepalaImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="guruDesc">Deskripsi Guru</label>
                                    <textarea name="guruDesc" class="form-control @error('guruDesc') is-invalid @enderror" placeholder="" value="{{$sambutans->guruDesc}}"></textarea>
                                    <small class="text-danger">@error('guruDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="guruImage">Foto Guru</label>
                                    <input type="file" name="guruImage" class="form-control @error('guruImage') is-invalid @enderror" placeholder="Foto Guru" value="{{$sambutans->guruImage}}">
                                    <img src="{{ asset('images/sambutanGuru/'.$sambutans->guruImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('guruImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('sambutans.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
