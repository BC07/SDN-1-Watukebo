@extends('layouts.static')
@section('homeContent')

 <!-- Main -->

  <!-- Carousel -->
  <div class="header-img">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" id="carouselTentang">
        <div class="carousel-item active">
          <img src="{{ asset('assets/img/tentangkami.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/img/testtentang.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/img/testtentang2.jpg') }}" class="d-block w-100" alt="...">
        </div>
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
      <a class="_nav-link active" id="pills-home-tab" data-toggle="pill" href="#kelas1" role="tab" aria-controls="kelas1"
        aria-selected="true">Kelas 1</a>
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
    <div class="tab-pane fade show active" id="kelas1" role="tabpanel" aria-labelledby="kelas1">
      <div class="row">
        <div class="col text-center">
          <img class="gambarKelas" src="{{ asset('assets/img/kelas1.png') }}" alt="">
        </div>
        <div class="col" id="textKelas">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, beatae ipsum? Quam adipisci, ea
          inventore animi eaque architecto libero sit unde voluptas, nemo tempore amet, provident dolorum aperiam ex?
          Cum?
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="kelas2" role="tabpanel" aria-labelledby="kelas2">
      <div class="row">
        <div class="col text-center">
          <img class="gambarKelas" src="{{ asset('assets/img/kelas2.png') }}" alt="">
        </div>
        <div class="col" id="textKelas">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, beatae ipsum? Quam adipisci, ea
          inventore animi eaque architecto libero sit unde voluptas, nemo tempore amet, provident dolorum aperiam ex?
          Cum?
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="kelas3" role="tabpanel" aria-labelledby="kelas3">
      <div class="row">
        <div class="col text-center">
          <img class="gambarKelas" src="{{ asset('assets/img/kelas3.png') }}" alt="">
        </div>
        <div class="col" id="textKelas">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, beatae ipsum? Quam adipisci, ea
          inventore animi eaque architecto libero sit unde voluptas, nemo tempore amet, provident dolorum aperiam ex?
          Cum?
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="kelas4" role="tabpanel" aria-labelledby="kelas4">
      <div class="row">
        <div class="col text-center">
          <img class="gambarKelas" src="{{ asset('assets/img/kelas4.png') }}" alt="">
        </div>
        <div class="col" id="textKelas">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, beatae ipsum? Quam adipisci, ea
          inventore animi eaque architecto libero sit unde voluptas, nemo tempore amet, provident dolorum aperiam ex?
          Cum?
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="kelas5" role="tabpanel" aria-labelledby="kelas5">
      <div class="row">
        <div class="col text-center">
          <img class="gambarKelas" src="{{ asset('assets/img/kelas5.png') }}" alt="">
        </div>
        <div class="col" id="textKelas">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, beatae ipsum? Quam adipisci, ea
          inventore animi eaque architecto libero sit unde voluptas, nemo tempore amet, provident dolorum aperiam ex?
          Cum?
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="kelas6" role="tabpanel" aria-labelledby="kelas6">
      <div class="row">
        <div class="col text-center">
          <img class="gambarKelas" src="{{ asset('assets/img/kelas6.png') }}" alt="">
        </div>
        <div class="col" id="textKelas">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, beatae ipsum? Quam adipisci, ea
          inventore animi eaque architecto libero sit unde voluptas, nemo tempore amet, provident dolorum aperiam ex?
          Cum?
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Tabs -->

  <!-- Carousel Prestasi Siswa -->

  <div class="container programbox">
    <h1>Prestasi Siswa</h1>
    <hr />
    <div class="row">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="wrapperekskul">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <img
                        src="https://img.freepik.com/free-vector/empty-school-class-background_52683-47993.jpg?size=626&ext=jpg&ga=GA1.2.1932506915.1628208000" />
                      <div class="card-body">
                        <h3>Nature writing</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img
                        src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHw%3D&w=1000&q=80" />
                      <div class="card-body">
                        <h3>What is Lorem Ipsum?</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img src="http://c.files.bbci.co.uk/C870/production/_112921315_gettyimages-876284806.jpg" />
                      <div class="card-body">
                        <h3>Nature writing</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapperekskul">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <img
                        src="https://img.freepik.com/free-vector/empty-school-class-background_52683-47993.jpg?size=626&ext=jpg&ga=GA1.2.1932506915.1628208000" />
                      <div class="card-body">
                        <h3>Nature writing</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img
                        src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHw%3D&w=1000&q=80" />
                      <div class="card-body">
                        <h3>What is Lorem Ipsum?</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img src="http://c.files.bbci.co.uk/C870/production/_112921315_gettyimages-876284806.jpg" />
                      <div class="card-body">
                        <h3>Nature writing</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapperekskul">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <img
                        src="https://img.freepik.com/free-vector/empty-school-class-background_52683-47993.jpg?size=626&ext=jpg&ga=GA1.2.1932506915.1628208000" />
                      <div class="card-body">
                        <h3>Nature writing</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img
                        src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHw%3D&w=1000&q=80" />
                      <div class="card-body">
                        <h3>What is Lorem Ipsum?</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <img src="http://c.files.bbci.co.uk/C870/production/_112921315_gettyimages-876284806.jpg" />
                      <div class="card-body">
                        <h3>Nature writing</h3>
                      </div>
                    </div>
                  </div>
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

  <!-- End Carousel Prestasi Siswa -->

  <!-- End Main -->

@endsection