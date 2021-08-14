@extends('layouts.master')
@section('title', 'Deskripsi Kelas')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Deskrpisi Kelas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Deskripsi Kelas</li>
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
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Data Deskripsi Kelas 1</h3>
                        <a href="{{ route('kelasdeskripsi.create') }}" class="btn btn-sm btn-success"><i
                                class="fas fa-plus"></i>
                            Create</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 1</th>
                                <th>Gambar Kelas 1</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas1Desc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas1/'.$_kelasdeskripsi->kelas1Image) }}" width="100px" height="80px" alt="Image">
                                    <td>
                                        <a href="{{ route('kelasdeskripsi.edit', [$_kelasdeskripsi->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
            
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Data Deskripsi Kelas 2</h3>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 2</th>
                                <th>Gambar Kelas 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas2Desc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas2/'.$_kelasdeskripsi->kelas2Image) }}" width="100px" height="80px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ route('kelasdeskripsi.edit', [$_kelasdeskripsi->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Data Deskripsi Kelas 3</h3>
                    
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 3</th>
                                <th>Gambar Kelas 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas3Desc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas3/'.$_kelasdeskripsi->kelas3Image) }}" width="100px" height="80px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ route('kelasdeskripsi.edit', [$_kelasdeskripsi->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Data Deskripsi Kelas 4</h3>
                    
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 4</th>
                                <th>Gambar Kelas 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas4Desc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas4/'.$_kelasdeskripsi->kelas4Image) }}" width="100px" height="80px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ route('kelasdeskripsi.edit', [$_kelasdeskripsi->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Data Deskripsi Kelas 5</h3>
                    
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 5</th>
                                <th>Gambar Kelas 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas5Desc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas5/'.$_kelasdeskripsi->kelas5Image) }}" width="100px" height="80px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ route('kelasdeskripsi.edit', [$_kelasdeskripsi->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Data Deskripsi Kelas 6</h3>
                    
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 6</th>
                                <th>Gambar Kelas 6</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas6Desc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas6/'.$_kelasdeskripsi->kelas6Image) }}" width="100px" height="80px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ route('kelasdeskripsi.edit', [$_kelasdeskripsi->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@push('script')
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#table-sambutans").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });

    </script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush
