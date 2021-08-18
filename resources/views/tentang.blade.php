@extends('layouts.static')
@section('homeContent')

<!-- Main -->

<!-- Carousel -->
<div class="header-img">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> -->
            @foreach ($galeritentangs as $galeritentangss)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" id="carouselTentang">
            <!-- <div class="carousel-item active">
          <img src="{{ asset('assets/img/tentangkami.jpg') }}" class="d-block w-100" alt="...">
        </div> -->

            @foreach ($galeritentangs as $galeritentangss)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img src="{{ asset('images/galeriTentang/'.$galeritentangss->galeriTentangImage) }}"
                    class="d-block w-100" alt="...">
            </div>
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <h1>Guru & Staff SDN 1 Watukebo</h1>
</div>
<!-- End Carousel -->

<!-- Nav Tabs -->
<ul class="nav _nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="_nav-item" role="presentation">
        <a class="_nav-link active" id="pills-home-tab" data-toggle="pill" href="#kelas1" role="tab"
            aria-controls="kelas1" aria-selected="true">Kelas 1</a>
    </li>
    <li class="_nav-item" role="presentation">
        <a class="_nav-link" id="pills-profile-tab" data-toggle="pill" href="#kelas2" role="tab" aria-controls="kelas2"
            aria-selected="false">Kelas 2</a>
    </li>
    <li class="_nav-item" role="presentation">
        <a class="_nav-link" id="pills-contact-tab" data-toggle="pill" href="#kelas3" role="tab" aria-controls="kelas3"
            aria-selected="false">Kelas 3</a>
    </li>
    <li class="_nav-item" role="presentation">
        <a class="_nav-link" id="pills-home-tab" data-toggle="pill" href="#kelas4" role="tab" aria-controls="kelas4"
            aria-selected="false">Kelas 4</a>
    </li>
    <li class="_nav-item" role="presentation">
        <a class="_nav-link" id="pills-profile-tab" data-toggle="pill" href="#kelas5" role="tab" aria-controls="kelas5"
            aria-selected="false">Kelas 5</a>
    </li>
    <li class="_nav-item" role="presentation">
        <a class="_nav-link" id="pills-contact-tab" data-toggle="pill" href="#kelas6" role="tab" aria-controls="kelas6"
            aria-selected="false">Kelas 6</a>
    </li>
</ul>

<div class="tab-content" id="pills-tabContent">
    @foreach ($kelasdeskripsi as $kelasdeskripsii)
    <div class="tab-pane fade show active" id="kelas1" role="tabpanel" aria-labelledby="kelas1">
        <div class="row kelasAtas">
            <div class="col text-center">
                <img class="gambarKelas" src="{{ asset('images/kelas1a/'.$kelasdeskripsii->kelas1aImage) }}" alt="">
            </div>
            <div class="col" id="textKelas">
                {{ $kelasdeskripsii->kelas1aDesc }}
            </div>
        </div>

        <div class="row kelasBawah">
            <div class="col text-center">
                <img class="gambarKelas" src="{{ asset('images/kelas1b/'.$kelasdeskripsii->kelas1bImage) }}" alt="">
            </div>
            <div class="col" id="textKelas">
                {{ $kelasdeskripsii->kelas1bDesc }}
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="kelas2" role="tabpanel" aria-labelledby="kelas2">
        <div class="row kelasAtas">
            <div class="col text-center">
                <img class="gambarKelas" src="{{ asset('images/kelas2a/'.$kelasdeskripsii->kelas2aImage) }}" alt="">
            </div>
            <div class="col" id="textKelas">
                {{ $kelasdeskripsii->kelas2aDesc }}
            </div>
        </div>

        <div class="row kelasBawah">
            <div class="col text-center">
                <img class="gambarKelas" src="{{ asset('images/kelas2b/'.$kelasdeskripsii->kelas2bImage) }}" alt="">
            </div>
            <div class="col" id="textKelas">
                {{ $kelasdeskripsii->kelas2bDesc }}
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="kelas3" role="tabpanel" aria-labelledby="kelas3">
        <div class="row kelasAtas">
            <div class="col text-center">
                <img class="gambarKelas" src="{{ asset('images/kelas3a/'.$kelasdeskripsii->kelas3aImage) }}" alt="">
            </div>
            <div class="col" id="textKelas">
                {{ $kelasdeskripsii->kelas3aDesc }}
            </div>
        </div>

        <div class="row kelasBawah">
            <div class="col text-center">
                <img class="gambarKelas" src="{{ asset('images/kelas3b/'.$kelasdeskripsii->kelas3bImage) }}" alt="">
            </div>
            <div class="col" id="textKelas">
                {{ $kelasdeskripsii->kelas3bDesc }}
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="kelas4" role="tabpanel" aria-labelledby="kelas4">
        <div class="row kelasAtas">
            <div class="col text-center">
                <img class="gambarKelas" src="{{ asset('images/kelas4a/'.$kelasdeskripsii->kelas4aImage) }}" alt="">
            </div>
            <div class="col" id="textKelas">
                {{ $kelasdeskripsii->kelas4aDesc }}
            </div>
        </div>

        <div class="row kelasBawah">
            <div class="col text-center">
                <img class="gambarKelas" src="{{ asset('images/kelas4b/'.$kelasdeskripsii->kelas4bImage) }}" alt="">
            </div>
            <div class="col" id="textKelas">
                {{ $kelasdeskripsii->kelas4bDesc }}
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="kelas5" role="tabpanel" aria-labelledby="kelas5">
        <div class="row kelasAtas">
            <div class="col text-center">
                <img class="gambarKelas" src="{{ asset('images/kelas5a/'.$kelasdeskripsii->kelas5aImage) }}" alt="">
            </div>
            <div class="col" id="textKelas">
                {{ $kelasdeskripsii->kelas5aDesc }}
            </div>
        </div>

        <div class="row kelasBawah">
            <div class="col text-center">
                <img class="gambarKelas" src="{{ asset('images/kelas5b/'.$kelasdeskripsii->kelas5bImage) }}" alt="">
            </div>
            <div class="col" id="textKelas">
                {{ $kelasdeskripsii->kelas5bDesc }}
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="kelas6" role="tabpanel" aria-labelledby="kelas6">
        <div class="row kelasAtas">
            <div class="col text-center">
                <img class="gambarKelas" src="{{ asset('images/kelas6a/'.$kelasdeskripsii->kelas6aImage) }}" alt="">
            </div>
            <div class="col" id="textKelas">
                {{ $kelasdeskripsii->kelas6aDesc }}
            </div>
        </div>

        <div class="row kelasBawah">
            <div class="col text-center">
                <img class="gambarKelas" src="{{ asset('images/kelas6b/'.$kelasdeskripsii->kelas6bImage) }}" alt="">
            </div>
            <div class="col" id="textKelas">
                {{ $kelasdeskripsii->kelas6bDesc }}
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- End Nav Tabs -->

<!-- Carousel Prestasi Siswa -->


<div class="container programbox">
    <h1>Prestasi Siswa</h1>
    <hr />
</div>

<div class="home_body">
    <div class="container">
        <div class="latest_post">
            <div class="latest_post_top">
                <h1 class="latest_post_h1 brdr_line"></h1>
            </div>

            <div class="row">

                @foreach ($prestasi as $prestasii)
                <div class="col-12 col-md-6 col-lg-4">
                    <a>
                        <div class="home_card">
                            <div class="home_card_top_gallery">
                                <img class="imgPrestasi" src="{{ asset('images/prestasi/'.$prestasii->prestasiImage) }}"
                                    alt="image">
                            </div>
                            <div class="home_card_bottom">
                                <div class="home_card_bottom_text">
                                    <p class="author_name">{{ $prestasii->prestasiDesc }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

<!-- End Carousel Prestasi Siswa -->

<div class="pagination">
    <ul class="pagination_ul d-flex">
        <li>
            {{ $prestasi->links() }}
        </li>
    </ul>
</div>

<!-- End Main -->

@endsection
