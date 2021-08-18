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
                                    <label for="title">Deskripsi Kelas 1a</label>
                                    <textarea name="kelas1aDesc" class="form-control @error('kelas1aDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas1aDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas1aImage">Foto Kelas 1a</label>
                                    <input type="file" name="kelas1aImage" class="form-control @error('kelas1aImage') is-invalid @enderror" placeholder="Foto Kelas 1a">
                                    <small class="text-danger">@error('kelas1Image') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 1b</label>
                                    <textarea name="kelas1bDesc" class="form-control @error('kelas1bDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas1bDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas1bImage">Foto Kelas 1b</label>
                                    <input type="file" name="kelas1bImage" class="form-control @error('kelas1Image') is-invalid @enderror" placeholder="Foto Kelas 1b">
                                    <small class="text-danger">@error('kelas1bImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 2a</label>
                                    <textarea name="kelas2aDesc" class="form-control @error('kelas2aDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas2aDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas2aImage">Foto Kelas 2a</label>
                                    <input type="file" name="kelas2aImage" class="form-control @error('kelas2aImage') is-invalid @enderror" placeholder="Foto Kelas 2a">
                                    <small class="text-danger">@error('kelas2aImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 2b</label>
                                    <textarea name="kelas2bDesc" class="form-control @error('kelas2bDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas2bDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas2bImage">Foto Kelas 2b</label>
                                    <input type="file" name="kelas2bImage" class="form-control @error('kelas2bImage') is-invalid @enderror" placeholder="Foto Kelas 2b">
                                    <small class="text-danger">@error('kelas2bImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 3a</label>
                                    <textarea name="kelas3aDesc" class="form-control @error('kelas3aDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas3aDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas3aImage">Foto Kelas 3a</label>
                                    <input type="file" name="kelas3aImage" class="form-control @error('kelas3Image') is-invalid @enderror" placeholder="Foto Kelas 3a">
                                    <small class="text-danger">@error('kelas3aImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 3b</label>
                                    <textarea name="kelas3bDesc" class="form-control @error('kelas3bDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas3bDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas3bImage">Foto Kelas 3b</label>
                                    <input type="file" name="kelas3bImage" class="form-control @error('kelas3bImage') is-invalid @enderror" placeholder="Foto Kelas 3b">
                                    <small class="text-danger">@error('kelas3bImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 4a</label>
                                    <textarea name="kelas4aDesc" class="form-control @error('kelas4aDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas4aDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas4aImage">Foto Kelas 4a</label>
                                    <input type="file" name="kelas4aImage" class="form-control @error('kelas4aImage') is-invalid @enderror" placeholder="Foto Kelas 4a">
                                    <small class="text-danger">@error('kelas4aImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 4b</label>
                                    <textarea name="kelas4bDesc" class="form-control @error('kelas4bDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas4bDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas4bImage">Foto Kelas 4b</label>
                                    <input type="file" name="kelas4bImage" class="form-control @error('kelas4bImage') is-invalid @enderror" placeholder="Foto Kelas 4b">
                                    <small class="text-danger">@error('kelas4bImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 5a</label>
                                    <textarea name="kelas5aDesc" class="form-control @error('kelas5aDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas5aDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas5aImage">Foto Kelas 5a</label>
                                    <input type="file" name="kelas5aImage" class="form-control @error('kelas5aImage') is-invalid @enderror" placeholder="Foto Kelas 5a">
                                    <small class="text-danger">@error('kelas5aImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 5b</label>
                                    <textarea name="kelas5bDesc" class="form-control @error('kelas5bDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas5bDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas5bImage">Foto Kelas 5b</label>
                                    <input type="file" name="kelas5bImage" class="form-control @error('kelas5bImage') is-invalid @enderror" placeholder="Foto Kelas 5b">
                                    <small class="text-danger">@error('kelas5bImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 6a</label>
                                    <textarea name="kelas6aDesc" class="form-control @error('kelas6aDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas6aDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas6aImage">Foto Kelas 6a</label>
                                    <input type="file" name="kelas6aImage" class="form-control @error('kelas6aImage') is-invalid @enderror" placeholder="Foto Kelas 6a">
                                    <small class="text-danger">@error('kelas6aImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Deskripsi Kelas 6b</label>
                                    <textarea name="kelas6bDesc" class="form-control @error('kelas6bDesc') is-invalid @enderror"></textarea>
                                    <small class="text-danger">@error('kelas6bDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas6bImage">Foto Kelas 6b</label>
                                    <input type="file" name="kelas6bImage" class="form-control @error('kelas6bImage') is-invalid @enderror" placeholder="Foto Kelas 6b">
                                    <small class="text-danger">@error('kelas6bImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('kelasdeskripsi.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
    </section>
    <!-- /.content -->
@endsection
