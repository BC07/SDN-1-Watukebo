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
                                    <label for="Kelas1Desc">Deskripsi Kelas 1</label>
                                    <input type="text" name="kelas1Desc" class="form-control @error('kelas1Desc') is-invalid @enderror" value="{{$kelasdeskripsi->kelas1Desc}}"></input>
                                    <small class="text-danger">@error('KelasDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas1Image">Foto Kelas 1</label>
                                    <input type="file" name="kelas1Image" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas1Image}}">
                                    <img src="{{ asset('images/kelas1/'.$kelasdeskripsi->kelas1Image) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas1Image') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas2Desc">Deskripsi Kelas 2</label>
                                    <textarea name="kelas2Desc" class="form-control @error('Kelas2Desc') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas2Desc}}"></textarea>
                                    <small class="text-danger">@error('KelasDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas1Image">Foto Kelas 2</label>
                                    <input type="file" name="kelas2Image" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas2Image}}">
                                    <img src="{{ asset('images/kelas2/'.$kelasdeskripsi->kelas2Image) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas2Image') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas3Desc">Deskripsi Kelas 3</label>
                                    <textarea name="Kelas3Desc" class="form-control @error('Kelas3Desc') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas3Desc}}"></textarea>
                                    <small class="text-danger">@error('KelasDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas3Image">Foto Kelas 3</label>
                                    <input type="file" name="kelas3Image" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas3Image}}">
                                    <img src="{{ asset('images/kelas3/'.$kelasdeskripsi->kelas3Image) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas3Image') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas4Desc">Deskripsi Kelas 4</label>
                                    <textarea name="Kelas4Desc" class="form-control @error('Kelas4Desc') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas4Desc}}"></textarea>
                                    <small class="text-danger">@error('KelasDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas1Image">Foto Kelas 4</label>
                                    <input type="file" name="kelas4Image" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas4Image}}">
                                    <img src="{{ asset('images/kelas4/'.$kelasdeskripsi->kelas4Image) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas4Image') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas5Desc">Deskripsi Kelas 5</label>
                                    <textarea name="Kelas5Desc" class="form-control @error('Kelas5Desc') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas5Desc}}"></textarea>
                                    <small class="text-danger">@error('KelasDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas5Image">Foto Kelas 5</label>
                                    <input type="file" name="kelas5Image" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas5Image}}">
                                    <img src="{{ asset('images/kelas5/'.$kelasdeskripsi->kelas5Image) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas5Image') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kelas6Desc">Deskripsi Kelas 6</label>
                                    <textarea name="Kelas6Desc" class="form-control @error('Kelas6Desc') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas6Desc}}"></textarea>
                                    <small class="text-danger">@error('KelasDesc') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Kelas6Image">Foto Kelas 6</label>
                                    <input type="file" name="kelas6Image" class="form-control @error('kepalaImage') is-invalid @enderror" value="{{$kelasdeskripsi->Kelas6Image}}">
                                    <img src="{{ asset('images/kelas6/'.$kelasdeskripsi->kelas6Image) }}" width="100px" height="80px" alt="Image">
                                    <small class="text-danger">@error('Kelas6Image') {{$message}} @enderror</small>
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
