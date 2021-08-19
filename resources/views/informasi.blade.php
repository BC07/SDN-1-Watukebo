@extends('layouts.static')
@section('homeContent')

<!-- Jumbotron banner-->
<section id="informasi">
    <div class="jumbotron jumbotron-fluid ">
        <div class="container text-center p-5">
            <img id="gambar" src="{{ asset('assets/img/PIP-09.png') }}" alt="">
        </div>
    </div>

    <div class="container text-center judul">
        <h1 class="garis">INFORMASI PENDAFTARAN & ALUR</h1>
        <hr id="title-pro">
    </div>

    <div class=" tengah ">


        <div class="wrapper-grid float">

            <div class=" tutorial a">
                <div class='banner-img1'></div>
                <img src="{{ asset('assets/img/1.jpg') }}" alt='profile image' class="profile-img">
                <h1 class="container name">Kunjungi Website</h1>
                <p class="description">Mengunjungi website resmi yang sudah disediakan
                    oleh sekolah (sdn1watukebo.sch.id).</p>
                <!-- <button class='btn'>Follow</button> -->
            </div>

            <div class=" tutorial b">
                <div class='banner-img2'></div>
                <img src="{{ asset('assets/img/2.jpg') }}" alt='profile image' class="profile-img">
                <h1 class="container name">Klik "Daftar"</h1>
                <p class="description">Klik pada tombol "Daftar" yang terletak pada halaman beranda. </p>
                <!-- <button class='btn'>Follow</button> -->
            </div>

            <div class=" tutorial c">
                <div class='banner-img3'></div>
                <img src="{{ asset('assets/img/3.jpg') }}" alt='profile image' class="profile-img">
                <h1 class="container name">Isi Form Pendaftaran</h1>
                <p class="description">Isi form pendaftaran dengan benar sesuai dengan data yang sebenar-benarnya.
                    Jika terdapat salah input data, silahkan hubungi nomor admin.
                </p>
                <!-- <button class='btn'>Follow</button> -->
            </div>

            <div class=" tutorial d">
                <div class='banner-img4'></div>
                <img src="{{ asset('assets/img/4.jpg') }}" alt='profile image' class="profile-img">
                <h1 class="container name">Upload & Tunggu Konfirmasi</h1>
                <p class="description">Setelah mengisi form, upload semua berkas yang diperlukan dan tunggu konfirmasi
                    oleh pihak sekolah melalui email maupun media lainnya.</p>
                <!-- <button class='btn'>Follow</button> -->
            </div>

            <div class=" tutorial">
                <div class='banner-img5'></div>
                <img src="{{ asset('assets/img/5.jpg') }}" alt='profile image' class="profile-img">
                <p class="container name">Konfirmasi Dari Sekolah</p>
                <p class="description">Setelah mendapatkan konfirmasi dari sekolah, ikuti arahan yang diberikan.</p>
                <!-- <button class='btn'>Follow</button> -->
            </div>

            <div class=" tutorial">
                <div class='banner-img6'></div>
                <img src="{{ asset('assets/img/6.jpg') }}" alt='profile image' class="profile-img">
                <p class="container name">Selamat! Anak anda sudah diterima di SDN 1 Watukebo</p>
                <p class="description">Lakukan segala urusan administrasi yang diperlukan.</p>
                <!-- <button class='btn'>Follow</button> -->
            </div>
        </div>
</section>

<!-- konten informasi -->
<section id="konten-informasi">
    <br class="space">
    <div>
        <h1 class="container garis2">MANFAAT PENDAFTARAN ONLINE ?</h1>
        <p class="p-why">Beberapa alasan mengapa lebih baik mendaftar online.</p>

    </div>
    <div class="container konten-kotak">
        <div class="row container-fluid2 no-gutters fiture-margin">
            <div class="col-lg-3 col-md-12 container-informasi-desc">
                <img class="vector" src="{{ asset('assets/img/1k.png') }}" alt="">
                <h4>WAKTU YANG CEPAT</h4>
                <p class="p-deskripsi">Waktu yang sangat cepat dan efisien.</p>
            </div>
            <div class="col-lg-3 col-md-12 container-informasi-desc">
                <img class="vector" src="{{ asset('assets/img/2k.png') }}" alt="">
                <h4>PROSES</h4>
                <p class="p-deskripsi">Proses data yang sangat cepat dan mudah.</p>
            </div>
            <div class="col-lg-3 col-md-12 container-informasi-desc">
                <img class="vector" src="{{ asset('assets/img/3k.png') }}" alt="">
                <h4>DATA LENGKAP</h4>
                <p class="p-deskripsi">Data yang dikumpulkan lebih lengkap dan sesuai.</p>
            </div>
            <div class="col-lg-3 col-md-12 container-informasi-desc">
                <img class="vector" src="{{ asset('assets/img/4k.png') }}" alt="">
                <h4>FLEKSIBLE</h4>
                <p class="p-deskripsi">Dapat digunakan siapa saja dan dimana saja.</p>
            </div>
        </div>
    </div>

    <div class="container space-down">

    </div>
    <!-- <br class="space"> -->
</section>

<!-- SIswa & siswi -->
<div class=" container container-data-siswa">

    <div class="container-siswa text-center">
        <br>
        <div class="judul-last-informasi">
            <h1 class="container besar">Siswa/i Di SDN 1 Watukebo </h1>
            <p class="why">Mengenal Sekolah Lebih jauh</p>
        </div>
        <div class="koten-2-kotak ">
            <button type='button' onclick="location.href='{{ route('datasiswa.index') }}';"
                class='btn btn-primary center-block'> Klik Disini</button>
        </div>
        <br>
    </div>
    <br>
</div>

@endsection