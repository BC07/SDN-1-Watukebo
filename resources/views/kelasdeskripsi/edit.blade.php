@extends('layouts.master')
@section('title', 'Edit Sambutan')
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
                <form action="{{ route('kelasdeskripsi.update', [$kelasdeskripsi->id]) }}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    @method('put')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas1aDesc">Deskripsi Kelas 1a</label>
                                    <input type="text" name="kelas1aDesc" class="form-control @error('kelas1aDesc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas1aDesc}}"></input>
                                    <small class="text-danger">@error('Kelas1aDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas1aImage">Foto Kelas 1a</label>
                                    <input type="file" name="kelas1aImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas1aImage}}">
                                    <img src="{{ asset('images/kelas1a/'.$kelasdeskripsi->kelas1aImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas1aImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas1bDesc">Deskripsi Kelas 1b</label>
                                    <input type="text" name="kelas1bDesc" class="form-control @error('kelas1bDesc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas1bDesc}}"></input>
                                    <small class="text-danger">@error('Kelas1bDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas1bImage">Foto Kelas 1b</label>
                                    <input type="file" name="kelas1bImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas1bImage}}">
                                    <img src="{{ asset('images/kelas1b/'.$kelasdeskripsi->kelas1bImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas1bImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas2aDesc">Deskripsi Kelas 2a</label>
                                    <input type="text" name="kelas2aDesc" class="form-control @error('kelas2aDesc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas2aDesc}}"></input>
                                    <small class="text-danger">@error('Kelas2aDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas2aImage">Foto Kelas 2a</label>
                                    <input type="file" name="kelas2aImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas2aImage}}">
                                    <img src="{{ asset('images/kelas2a/'.$kelasdeskripsi->kelas2aImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas2aImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas2bDesc">Deskripsi Kelas 2b</label>
                                    <input type="text" name="kelas2bDesc" class="form-control @error('kelas2bDesc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas2bDesc}}"></input>
                                    <small class="text-danger">@error('Kelas2bDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas2bImage">Foto Kelas 2b</label>
                                    <input type="file" name="kelas2bImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas2bImage}}">
                                    <img src="{{ asset('images/kelas2b/'.$kelasdeskripsi->kelas2bImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas2bImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas3aDesc">Deskripsi Kelas 3a</label>
                                    <input type="text" name="kelas3aDesc" class="form-control @error('kelas3aDesc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas3aDesc}}"></input>
                                    <small class="text-danger">@error('Kelas3aDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas3aImage">Foto Kelas 3a</label>
                                    <input type="file" name="kelas3aImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas3aImage}}">
                                    <img src="{{ asset('images/kelas3a/'.$kelasdeskripsi->kelas3aImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas3aImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas3bDesc">Deskripsi Kelas 3b</label>
                                    <input type="text" name="kelas3bDesc" class="form-control @error('kelas3bDesc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas3bDesc}}"></input>
                                    <small class="text-danger">@error('Kelas3bDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas3bImage">Foto Kelas 3b</label>
                                    <input type="file" name="kelas3bImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas3bImage}}">
                                    <img src="{{ asset('images/kelas3b/'.$kelasdeskripsi->kelas3bImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas3bImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas4aDesc">Deskripsi Kelas 4a</label>
                                    <input type="text" name="kelas4aDesc" class="form-control @error('kelas4aDesc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas4aDesc}}"></input>
                                    <small class="text-danger">@error('Kelas4aDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas4aImage">Foto Kelas 4a</label>
                                    <input type="file" name="kelas4aImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas4aImage}}">
                                    <img src="{{ asset('images/kelas4a/'.$kelasdeskripsi->kelas4aImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas4aImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas4bDesc">Deskripsi Kelas 4b</label>
                                    <input type="text" name="kelas4bDesc" class="form-control @error('kelas4bDesc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas4bDesc}}"></input>
                                    <small class="text-danger">@error('Kelas4bDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas4bImage">Foto Kelas 4b</label>
                                    <input type="file" name="kelas4bImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas4bImage}}">
                                    <img src="{{ asset('images/kelas4b/'.$kelasdeskripsi->kelas4bImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas4bImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas5aDesc">Deskripsi Kelas 5a</label>
                                    <input type="text" name="kelas5aDesc" class="form-control @error('kelas5aDesc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas5aDesc}}"></input>
                                    <small class="text-danger">@error('Kelas5aDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas5aImage">Foto Kelas 5a</label>
                                    <input type="file" name="kelas5aImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas5aImage}}">
                                    <img src="{{ asset('images/kelas5a/'.$kelasdeskripsi->kelas5aImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas5Image') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas5bDesc">Deskripsi Kelas 5b</label>
                                    <input type="text" name="kelas5bDesc" class="form-control @error('kelas5bDesc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas5bDesc}}"></input>
                                    <small class="text-danger">@error('Kelas5bDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas5bImage">Foto Kelas 5b</label>
                                    <input type="file" name="kelas5bImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas5bImage}}">
                                    <img src="{{ asset('images/kelas5b/'.$kelasdeskripsi->kelas5bImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas5bImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas6aDesc">Deskripsi Kelas 6a</label>
                                    <input type="text" name="kelas6aDesc" class="form-control @error('kelas6aDesc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas6aDesc}}"></input>
                                    <small class="text-danger">@error('Kelas6aDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas6aImage">Foto Kelas a</label>
                                    <input type="file" name="kelas6aImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas6aImage}}">
                                    <img src="{{ asset('images/kelas6a/'.$kelasdeskripsi->kelas6aImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas6aImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas6bDesc">Deskripsi Kelas 6b</label>
                                    <input type="text" name="kelas6bDesc" class="form-control @error('kelas6bDesc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas6bDesc}}"></input>
                                    <small class="text-danger">@error('Kelas6bDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas6bImage">Foto Kelas 6b</label>
                                    <input type="file" name="kelas6bImage" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas6bImage}}">
                                    <img src="{{ asset('images/kelas6b/'.$kelasdeskripsi->kelas6bImage) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas6bImage') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- /.row -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('kelasdeskripsi.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
