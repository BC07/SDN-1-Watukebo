@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v1</li>
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
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info" style="background-color: #FFD5E5 !important;">
          <div class="inner">
            <h3 style="color: black !important;" >{{ $datasiswa->count() }}</h3>

            <p style="color: black !important;">Jumlah Data Siswa</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="{{ route('tabelsiswa.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success" style="background-color: #A0FFE6 !important;">
          <div class="inner">
          <h3 style="color: black !important;">{{ $galeritentangs->count() }}</h3>

            <p style="color: black !important;">Total Gallery</p>
          </div>
          <div class="icon">
            <i class="ion ion-images"></i>
          </div>
          <a href="{{ route('galeritentang.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning" style="background-color: #81F5FF !important; color: #fff !important;">
          <div class="inner">
          <h3 style="color: black !important;">{{ $prestasi->count() }}</h3>

            <p style="color: black !important;">Total Prestasi</p>
          </div>
          <div class="icon">
            <i class="ion ion-ribbon-a"></i>
          </div>
          <a href="" class="small-box-footer" style="color: #fff !important;">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection