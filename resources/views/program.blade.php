@extends('layouts.static')
@section('homeContent')


<br />
<div class="container programbox" style=" text-align: left;">
    <h1>PROGRAM</h1>
    <hr />
    <br />
    <!--Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">JANGKA PENDEK</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#jangkapanjang">JANGKA PANJANG</a>
        </li>
    </ul>



    <div class="tab-content" style="background: #f2f2f2;">
        <!-- UMUM -->
        <div id="home" class="container tab-pane active isiprogram" style="text-align: left!important;">
            <br />
            <ul>
                @foreach ($umum as $umum)
                @if($umum -> umum != null)
                ● &nbsp {{$umum -> umum}}
                @else
                <!-- &nbsp -->
                @endif
                <br>
                @endforeach
            </ul>
        </div>

        <!-- JANGKA PANJANG  -->
        <div id="jangkapanjang" class="container tab-pane fade  isiprogram">
            <br />
            <ul>
                @foreach ($jangkapanjang as $jangkapanjang)
                @if($jangkapanjang -> jangkapanjang != null)
                ● &nbsp {{$jangkapanjang -> jangkapanjang}}
                @else
                <!-- &nbsp -->
                @endif
                <br>
                @endforeach

            </ul>
        </div>

    </div>
</div>
<div class="container programbox">
    <h1>EKSTRAKURIKULER</h1>
    <hr />

    <div class="container">
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="wrapperekskul">
                            <div class="pagination">
                                <ul class="pagination_ul d-flex" id="pag-program" style="text-align=center" ;>
                                    <li style="list-style: none; padding: 50px;">
                                        {{ $ekstrakurikulers->links() }}
                                    </li>
                                </ul>
                            </div>
                            <div class="container">
                                <div class="row">
                                    @foreach ($ekstrakurikulers as $ekskul)


                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="{{ asset('images/ekstrakurikuler/'.$ekskul->ekskulImage) }}" />
                                            <div class="card-body">
                                                <h3>{{ $ekskul -> namaEkskul }}</h3>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</div>

<div style="background-color: #f2f2f2; padding: 15px; margin-top: 5%;">
    <h1 class="titleprogram">SEKOLAH</h1>
    <div class="wrappermenu" style="background-color: #f2f2f2;">
        <div class="carousel owl-carousel menucarousel" style="z-index: auto;">

            @foreach ($sekolah as $sekolah)
            @if($sekolah -> sekolah != null)
            <div class="card">
                <img src="{{ asset('images/sekolah/'.$sekolah->sekolahImage) }}" alt="">
                <h6>{{$sekolah -> sekolahDesc}}</h6>
            </div>
            @else
            <!-- &nbsp -->
            @endif
            <br>
            @endforeach
        </div>
    </div>

</div>
<div style="background-color: #f2f2f2; padding: 15px; margin-top: 5%;">
    <h1 class="titleprogram">SISWA</h1>
    <div class="wrappermenu" style="background-color: #f2f2f2;">
        <div class="carousel owl-carousel menucarousel" style="z-index: auto;">

            @foreach ($siswa as $siswa)
            @if($siswa -> siswa != null)
            <div class="card">
                <img src="{{ asset('images/siswa/'.$siswa->siswaImage) }}" alt="">
                <h6>{{$siswa -> siswaDesc}}</h6>
            </div>
            @else
            <!-- &nbsp -->
            @endif
            <br>
            @endforeach
        </div>
    </div>

</div>

<!-- </div> -->





<!-- End Main -->


<script>
$(".menucarousel").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 3,
            nav: false
        }
    }
});
</script>

@endsection