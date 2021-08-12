@extends('layouts.static')
@section('homeContent')


<br />
<div class="container programbox">
    <h1>PROGRAM</h1>
    <hr />
    <br />
    <!--Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">UMUM</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">KHUSUS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">JANGKA PANJANG</a>
        </li>
    </ul>



    <div class="tab-content" style="background: #f2f2f2">
    <!-- UMUM -->
        <div id="home" class="container tab-pane active">
            <br />
            <ul>
                @foreach ($program as $program)
                <li>
                    {{$program -> umum}}
                </li>
                @endforeach
            </ul>
        </div>

    <!-- KHUSUS -->
        <div id="menu1" class="container tab-pane fade">
            <br />
            <ul>
                <li>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
                    voluptatem aliquam, alias debitis molestiae conse temporibus?
                </li>
                <li>
                    Optio voluptatem aliquam, alias debitis molestiae consequuntur
                    temporibus?
                </li>
                <li>lias debitis molestiae consequuntur temporibus?</li>
                <li>
                    Lorem ipsum dolor sit amet consectetur adipisicing alias debitis
                    molestiae conseq temporibus?
                </li>
                <li>
                    Lorem ipsum dolor sit amet consecteturae consequuntur temporibus?
                </li>
            </ul>
        </div>

    <!-- JANGKA PANJANG  -->
        <div id="menu2" class="container tab-pane fade">
            <br />
            <ul>
                <li>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
                    voluptatem aliquam, alias debitis molestiae conse temporibus?
                </li>
                <li>
                    Optio voluptatem aliquam, alias debitis molestiae consequuntur
                    temporibus?
                </li>
                <li>lias debitis molestiae consequuntur temporibus?</li>
                <li>
                    Lorem ipsum dolor sit amet consectetur adipisicing alias debitis
                    molestiae conseq temporibus?
                </li>
                <li>
                    Lorem ipsum dolor sit amet consecteturae consequuntur temporibus?
                </li>
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

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="wrapperekskul">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="https://img.freepik.com/free-vector/empty-school-class-background_52683-47993.jpg?size=626&ext=jpg&ga=GA1.2.1932506915.1628208000" />
                                            <div class="card-body">
                                                <h3>Nature writing</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHw%3D&w=1000&q=80" />
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
                                            <img src="https://img.freepik.com/free-vector/empty-school-class-background_52683-47993.jpg?size=626&ext=jpg&ga=GA1.2.1932506915.1628208000" />
                                            <div class="card-body">
                                                <h3>Nature writing</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHw%3D&w=1000&q=80" />
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
                                            <img src="https://img.freepik.com/free-vector/empty-school-class-background_52683-47993.jpg?size=626&ext=jpg&ga=GA1.2.1932506915.1628208000" />
                                            <div class="card-body">
                                                <h3>Nature writing</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHw%3D&w=1000&q=80" />
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

</div>

<div style="background-color: #f2f2f2; padding: 15px; margin-top: 5%;">
    <h1 class="titleprogram">SEKOLAH</h1>
    <div class="wrappermenu" style="background-color: #f2f2f2;">
        <div class="carousel owl-carousel menucarousel" style="z-index: auto;">
            <div class="card">
                <img src="https://img.freepik.com/free-vector/student-classroom-template_1308-26333.jpg?size=626&ext=jpg" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card ">
                <img src="https://thumbs.dreamstime.com/b/pupils-raising-hands-to-answer-question-teacher-sitting-desk-education-concept-modern-school-classroom-interior-chalk-pupils-140896846.jpg" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card">
                <img src="https://img.freepik.com/free-vector/empty-school-class-background_52683-47681.jpg?size=626&ext=jpg&ga=GA1.2.1932506915.1628208000" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card">
                <img src="https://img.freepik.com/free-vector/student-classroom-template_1308-26333.jpg?size=626&ext=jpg" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card ">
                <img src="https://thumbs.dreamstime.com/b/pupils-raising-hands-to-answer-question-teacher-sitting-desk-education-concept-modern-school-classroom-interior-chalk-pupils-140896846.jpg" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card">
                <img src="https://img.freepik.com/free-vector/empty-school-class-background_52683-47681.jpg?size=626&ext=jpg&ga=GA1.2.1932506915.1628208000" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card">
                <img src="https://img.freepik.com/free-vector/student-classroom-template_1308-26333.jpg?size=626&ext=jpg" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card ">
                <img src="https://thumbs.dreamstime.com/b/pupils-raising-hands-to-answer-question-teacher-sitting-desk-education-concept-modern-school-classroom-interior-chalk-pupils-140896846.jpg" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card">
                <img src="https://img.freepik.com/free-vector/empty-school-class-background_52683-47681.jpg?size=626&ext=jpg&ga=GA1.2.1932506915.1628208000" alt="">
                <h6>heheter</h6>
            </div>
        </div>
    </div>

</div>
<div style="background-color: #f2f2f2; padding: 15px; margin-top: 5%;">
    <h1 class="titleprogram">SISWA</h1>
    <div class="wrappermenu" style="background-color: #f2f2f2;">
        <div class="carousel owl-carousel menucarousel" style="z-index: auto;">
            <div class="card">
                <img src="https://img.freepik.com/free-vector/student-classroom-template_1308-26333.jpg?size=626&ext=jpg" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card ">
                <img src="https://thumbs.dreamstime.com/b/pupils-raising-hands-to-answer-question-teacher-sitting-desk-education-concept-modern-school-classroom-interior-chalk-pupils-140896846.jpg" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card">
                <img src="https://img.freepik.com/free-vector/empty-school-class-background_52683-47681.jpg?size=626&ext=jpg&ga=GA1.2.1932506915.1628208000" alt="">
                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, pariatur praesentium inventore a
                    distinctio quas aliquid quibusdam expedita labore libero, consectetur nihil et ullam voluptates asperiores
                    quaerat ducimus? Vitae, et.</h6>
            </div>
            <div class="card">
                <img src="https://img.freepik.com/free-vector/student-classroom-template_1308-26333.jpg?size=626&ext=jpg" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card ">
                <img src="https://thumbs.dreamstime.com/b/pupils-raising-hands-to-answer-question-teacher-sitting-desk-education-concept-modern-school-classroom-interior-chalk-pupils-140896846.jpg" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card">
                <img src="https://img.freepik.com/free-vector/empty-school-class-background_52683-47681.jpg?size=626&ext=jpg&ga=GA1.2.1932506915.1628208000" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card">
                <img src="https://img.freepik.com/free-vector/student-classroom-template_1308-26333.jpg?size=626&ext=jpg" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card ">
                <img src="https://thumbs.dreamstime.com/b/pupils-raising-hands-to-answer-question-teacher-sitting-desk-education-concept-modern-school-classroom-interior-chalk-pupils-140896846.jpg" alt="">
                <h6>hehe</h6>
            </div>
            <div class="card">
                <img src="https://img.freepik.com/free-vector/empty-school-class-background_52683-47681.jpg?size=626&ext=jpg&ga=GA1.2.1932506915.1628208000" alt="">
                <h6>heheter</h6>
            </div>
        </div>
    </div>

</div>

</div>





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