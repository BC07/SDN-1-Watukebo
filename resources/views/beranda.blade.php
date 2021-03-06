@extends('layouts.static')
@section('homeContent')

<section id="Home">

    <div class="bg-home-image row no-gutters flex-wrap-reverse">

        <div class="col-lg-6 card-marg">
            <div class="home-card">
                <h1 style="z-index: auto;">JOIN US.</h1>
                <P style="z-index: auto;"> Bergabunglah menjadi salah satu bagian dari SDN 1 Watukebo dengan mendaftarkan anak anda melalui website kami. Fasilitas lengkap, lingkungan nyaman, serta guru yang berkompeten.
                </P>
                <div class="contariner-home-card">
                    @foreach ($linkdaftar as $_linkdaftar)
                    <button class="home-btn-card"
                        onclick="window.location='{{ $_linkdaftar->linkdaftar }}'">Daftar</button>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div>
                <img src="{{ asset('assets/img/gedung.png') }}" class="img-home" alt="" srcset="">
            </div>
        </div>

    </div>
</section>

<section id="visi">
    <div class="visiContainer">
        <h2>Visi</h2>
        <p>“TERDEPAN DALAM IMTAK DAN IPTEK, TERBAIK DALAM PRESTASI, TERPERCAYA DI MASYARAKAT.”</p>
    </div>
    <br>
    <div class="misiContainer">
        <h2>Misi</h2>

        <ul>
            <li class="judul">
                Mendorong dan membantu semangat penghayatan terhadap ajaran agama yang dianut dan budaya bangsa.
            </li>
            <li>
                Melaksanakan bimbingan dan pembelajaran dengan pendekatan PAIKEM dan CTL, dan pendekatan yang relevan
                secara konstektual, sehingga peserta didik berkembang wajar sesuai dengan potensi yang dimiliki.
            </li>
            <li>
                Menumbuhkembangkan semangat keunggulan secara intensif kepada seluruh warga sekolah.
            </li>
            <li>
                Menerapkan manajemen parsipatif dalam menciptakan tatanan kehidupan yang berkepribadian luhur
                dilingkungan sekolah.
            </li>
            <li>
                Menanamkan dan membina keterampilan serta mengembangkan potensi kodrati peserta didik.
            </li>
            <li>
                Menanamkan dan membina budaya tertib, berfikir ilmiah serta budaya kerja kepada seluruh warga sekolah.
            </li>
            <li>
                Mengutamakan keteladanan dalam proses pembelajaran yang berorientasi pada kemajuan peserta didik.
            </li>
        </ul>
    </div>
</section>


<section id="kenapa-harus-watukebo">
    <div class="kenapa-title">
        <h1>Kenapa Harus SDN 1 WATUKEBO ?</h1>
        <p class="p-kenapa">Alasan kenapa kalian semua harus bergabung dengan SDN 1 Watukebo.</p>
    </div>
    <div class="row container-fluid2 no-gutters features-marg">
        <div class="col-lg-3 col-md-12 container-beranda-desc">
            <img class="vector-image" src="{{ asset('assets/img/vector-icon1.png') }}" alt="">
            <h4>LINGKUNGAN NYAMAN</h4>
            <p class="p-desk">Berada di lingkungan yang asri, aman, dan kondusif.</p>
        </div>
        <div class="col-lg-3 col-md-12 container-beranda-desc">
            <img class="vector-image" src="{{ asset('assets/img/vector-icon2.png') }}" alt="">
            <h4>PENGAJAR KOMPETEN</h4>
            <p class="p-desk">Guru yang selalu memantau perkembangan siswa.</p>
        </div>
        <div class="col-lg-3 col-md-12 container-beranda-desc">
            <img class="vector-image" src="{{ asset('assets/img/vector-icon3.png') }}" alt="">
            <h4>FASILITAS LENGKAP</h4>
            <p class="p-desk">Penunjang belajar dengan kualitas premium.</p>
        </div>
        <div class="col-lg-3 col-md-12 container-beranda-desc">
            <img class="vector-image" src="{{ asset('assets/img/vector-icon4.png') }}" alt="">
            <h4>EKSTRAKULIKULER</h4>
            <p class="p-desk">Ekstrakulikuler lengkap sebagai penunjang bakaat siswa.</p>
        </div>
    </div>
</section>

<section id="sambutan">
    @foreach ($beranda as $berandaa)
    <h3>Sambutan</h3>
    <div class="row no-gutters">
        <div class="col-lg-6 flex-col-sambutan">
            <h1>Kepala Sekolah</h1>
            <p>{{ $berandaa->kepalaDesc }}</p>
        </div>
        <div class="col-lg-6 flex-col-sambutan text-align-col">
            <img src="{{ asset('images/sambutanKepala/'.$berandaa->kepalaImage) }}" alt="image">
        </div>
    </div>
    <br>
    <div class="row no-gutters flex-wrap-reverse">
        <div class="col-lg-6 flex-col-sambutan text-align-col2">
            <img src="{{ asset('images/sambutanGuru/'.$berandaa->guruImage) }}" alt="image">
        </div>
        <div class="col-lg-6 flex-col-sambutan">
            <h1>Guru & Staff</h1>
            <p>{{ $berandaa->guruDesc }}</p>
        </div>
    </div>
    @endforeach
</section>

<section id="school-address">
    <h1>ALAMAT</h1>

    <div class="row no-gutters ">

        <div class="col-lg-6">
            <div class="leftside">
                <div class="leftside-item">
                    <div>
                        <h6>Say Hello!</h6>
                        <h3>TEKAN DAN JELAJAHI.</h3>
                        <hr>
                        <p>Kami menunggu pesan dari kalian!</p>
                        <i class="fas fa-map-marker-alt">
                            <span>Banyuwangi, Jawa Timur, Indonesia</span>
                        </i>
                        <i class="fas fa-envelope-open">
                            <span>blimbingsarisdn1watukebo@gmail.com</span>
                        </i>
                        <i class="fas fa-phone-alt">
                            <span>0333635646</span>
                        </i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="rightside">
                <div class="rightside-item">
                    <p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15791.378241655406!2d114.3138026!3d-8.3182407!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe47abb2ec408d039!2sSD%20NEGERI%201%20WATUKEBO!5e0!3m2!1sen!2sid!4v1628255051196!5m2!1sen!2sid"
                            width="70%" height="460vh" style="border:0; border-radius: 26px;" allowfullscreen=""
                            loading="lazy">

                        </iframe>
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
