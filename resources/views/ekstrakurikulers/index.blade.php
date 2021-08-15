@extends('layouts.master')
@section('title', 'Ekstrakurikuler')
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
                    <li class="breadcrumb-item active">Ekstrakurikuler</li>
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
                    <h3 class="card-title">Data table of ekstrakurikuler</h3>
                    <a href="{{ route('ekstrakurikulers.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i>
                        Create</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="table-ekstrakurikulers" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ekstrakurikuler</th>
                            <th>Foto Ekstrakurikuler</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ekstrakurikulers as $ekskul)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $ekskul->namaEkskul }}</td>
                            <td>
                                <img src="{{ asset('images/ekstrakurikuler/'.$ekskul->ekskulImage) }}" width="100px" height="80px" alt="Image">
                            </td>
                            <td>{{ $ekskul->created_at }}</td>
                            <td>
                                <a href="{{ route('ekstrakurikulers.edit', [$ekskul->id]) }}" class="btn btn-warning float-left m-1">Edit</a>
                                <form class="float-left m-1" action="{{ route('ekstrakurikulers.destroy', [$ekskul->id]) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama Ekstrakurikuler</th>
                            <th>Foto Ekstrakurikuler</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
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
        $("#table-ekstrakurikulers").DataTable({
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