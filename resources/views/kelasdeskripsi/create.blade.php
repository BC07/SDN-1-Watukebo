@extends('layouts.master')
@section('title', 'Create Deskripsi Kelas')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Deskripsi Kelas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('sambutans.index') }}">Deskripsi Kelas</a></li>
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
                    <h3 class="card-title">Kelas 1</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('kelasdeskripsi.store') }}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 1</label>
                                    <textarea name="kelas1Desc" class="form-control @error('kelas1Desc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas1Desc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas1Image">Foto Kelas 1</label>
                                    <input type="file" name="Kelas1Image" class="form-control @error('kelas1Image') is-invalid @enderror" placeholder="Foto Kelas 1">
                                    <small class="text-danger">@error('kelas1Image') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div><!-- /.container-fluid -->

            <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kelas 2</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('kelasdeskripsi.store') }}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 2</label>
                                    <textarea name="kelas2Desc" class="form-control @error('kelas2Desc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas2Desc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas2Image">Foto Kelas 2</label>
                                    <input type="file" name="Kelas2Image" class="form-control @error('kelas2Image') is-invalid @enderror" placeholder="Foto Kelas 2">
                                    <small class="text-danger">@error('kelas2Image') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </form>
            </div><!-- /.container-fluid -->

            <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kelas 3</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('kelasdeskripsi.store') }}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 3</label>
                                    <textarea name="kelas3Desc" class="form-control @error('kelas3Desc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas3Desc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas3Image">Foto Kelas 3</label>
                                    <input type="file" name="Kelas3Image" class="form-control @error('kelas3Image') is-invalid @enderror" placeholder="Foto Kelas 3">
                                    <small class="text-danger">@error('kelas3Image') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- /.row -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('kelasdeskripsi.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
