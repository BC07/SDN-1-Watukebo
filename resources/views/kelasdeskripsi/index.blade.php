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
                        @if(count($kelasdeskripsi) < 1)
                            <a href="{{ route('kelasdeskripsi.create') }}" class="btn btn-sm btn-success">
                                <i class="fas fa-plus"></i>
                                Create
                            </a>
                        @else
                            
                        @endif
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 1a</th>
                                <th>Gambar Kelas 1a</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas1aDesc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas1a/'.$_kelasdeskripsi->kelas1aImage) }}" width="100px" height="80px" alt="Image">
                                    <td>
                                        <a href="{{ route('kelasdeskripsi.edit', [$_kelasdeskripsi->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 1b</th>
                                <th>Gambar Kelas 1b</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas1bDesc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas1b/'.$_kelasdeskripsi->kelas1bImage) }}" width="100px" height="80px" alt="Image">
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
                                <th>Deskripsi Kelas 2a</th>
                                <th>Gambar Kelas 2a</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas2aDesc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas2a/'.$_kelasdeskripsi->kelas2aImage) }}" width="100px" height="80px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ route('kelasdeskripsi.edit', [$_kelasdeskripsi->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 2b</th>
                                <th>Gambar Kelas 2b</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas2bDesc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas2b/'.$_kelasdeskripsi->kelas2bImage) }}" width="100px" height="80px" alt="Image">
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
                                <th>Deskripsi Kelas 3a</th>
                                <th>Gambar Kelas 3a</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas3aDesc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas3a/'.$_kelasdeskripsi->kelas3aImage) }}" width="100px" height="80px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ route('kelasdeskripsi.edit', [$_kelasdeskripsi->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 3b</th>
                                <th>Gambar Kelas 3b</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas3bDesc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas3b/'.$_kelasdeskripsi->kelas3bImage) }}" width="100px" height="80px" alt="Image">
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
                                <th>Deskripsi Kelas 4a</th>
                                <th>Gambar Kelas 4a</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas4aDesc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas4/'.$_kelasdeskripsi->kelas4aImage) }}" width="100px" height="80px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ route('kelasdeskripsi.edit', [$_kelasdeskripsi->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 4b</th>
                                <th>Gambar Kelas 4b</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas4bDesc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas4b/'.$_kelasdeskripsi->kelas4bImage) }}" width="100px" height="80px" alt="Image">
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
                                <th>Deskripsi Kelas 5a</th>
                                <th>Gambar Kelas 5a</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas5aDesc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas5a/'.$_kelasdeskripsi->kelas5aImage) }}" width="100px" height="80px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ route('kelasdeskripsi.edit', [$_kelasdeskripsi->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 5b</th>
                                <th>Gambar Kelas 5b</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas5bDesc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas5b/'.$_kelasdeskripsi->kelas5bImage) }}" width="100px" height="80px" alt="Image">
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
                                <th>Deskripsi Kelas 6a</th>
                                <th>Gambar Kelas 6a</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas6aDesc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas6a/'.$_kelasdeskripsi->kelas6aImage) }}" width="100px" height="80px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ route('kelasdeskripsi.edit', [$_kelasdeskripsi->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <table id="table-sambutans" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Deskripsi Kelas 6b</th>
                                <th>Gambar Kelas 6b</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelasdeskripsi as $_kelasdeskripsi)
                                <tr>
                                    <td>{{ $_kelasdeskripsi->kelas6bDesc }}</td>
                                    <td>
                                        <img src="{{ asset('images/kelas6b/'.$_kelasdeskripsi->kelas6Image) }}" width="100px" height="80px" alt="Image">
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
