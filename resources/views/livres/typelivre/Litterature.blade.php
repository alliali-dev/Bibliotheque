@extends('layouts.app')
@section('title','Bienvenue sur Bibliosave')
@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('public/assets/img/affiche2bibliosave.jpg') }}" alt=""
                style="height: 9.3cm;">
            <div class="position-absolute top-0 start-0 w-70 h-90 d-flex align-items-center"
                style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <!-- <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses
                            </h5>
                            <h1 class="display-3 text-white animated slideInDown">The Best Online Learning Platform
                            </h1>
                            <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed
                                stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus
                                eirmod elitr.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                More</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('public/assets/img/affiche1bibliosave.jpg') }}" alt=""
                style="height: 9.3cm;">
            <div class="position-absolute top-0 start-0 w-100 h-90 d-flex align-items-center"
                style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <!-- <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses
                            </h5>
                            <h1 class="display-3 text-white animated slideInDown">The Best Online Learning Platform
                            </h1>
                            <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed
                                stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus
                                eirmod elitr.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                More</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('public/assets/img/affiche3bibliosave.jpg') }}" alt=""
                style="height: 9.3cm;">
            <div class="position-absolute top-0 start-0 w-100 h-90 d-flex align-items-center"
                style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <!-- <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses
                            </h5>
                            <h1 class="display-3 text-white animated slideInDown">Get Educated Online From Your Home
                            </h1>
                            <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed
                                stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus
                                eirmod elitr.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                More</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('public/assets/img/affiche4bibliosave.jpg') }}" alt=""
                style="height: 9.3cm;">
            <div class="position-absolute top-0 start-0 w-100 h-90 d-flex align-items-center"
                style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <!-- <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses
                            </h5>
                            <h1 class="display-3 text-white animated slideInDown">Get Educated Online From Your Home
                            </h1>
                            <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed
                                stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus
                                eirmod elitr.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                More</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- Categories Start -->
<div class="container-fluid">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 1.5cm;">
            <h6 class="section-title bg-white text-center text-primary px-3">Litt&eacute;rature Africaine</h6>
            <!-- <h1 class="mb-5">Categories de livres</h1> -->
        </div>

        <div class="row" style="margin-top: 1.5cm;">
            @forelse($Livres as $item)
            <div class="col-3">
                <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <!-- <figure-caption class="position-relative d-block overflow-hidden"> -->
                    <img class="img-fluid" src="{{ asset('public/fichiers/image/'.$item->image) }}" alt="">
                    <!-- <div class="text-center position-absolute bottom-0 end-0 py-0 px-0"> -->
                    <!-- <h6 class="m-0" style="color:white;">{{$item->auteur->NomPrenAut}}</h6> -->
                    @php
                    $url = URL::asset('public/fichiers/document/'.$item->document);
                    $src = $url;
                    @endphp
                    <!-- button lecture -->
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#lirelivre"
                        data-src="{{ $src }}" style="width:max-content; margin: 0cm 2cm 0cm 0.5cm; border-radius: 1cm;">
                        Lire
                    </button>
                    <!-- end button lecture -->
                    <!-- </div> -->
                    <!-- </figure-caption> -->

                </div><br><br>

            </div>
            @empty
            Pas de livre renseigné
            @endforelse
            <!-- pagination -->
            <nav class="navbar-link" style="margin-top: 1.5cm;">

                {{ $Livres->links('pagination::bootstrap-4') }}
            </nav>
            <!-- end pagination -->
        </div>

    </div>

    <!-- Modal starts -->
    <div class="modal fade bd-example-modal-lg" id="lirelivre" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        LECURE DU LIVRE
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- iframe -->
                    <iframe src="{{ $src }}#toolbar=0&navpanes=0" id="preview_doc" frameborder="0"
                        style="width:100%;min-height:640px;">
                    </iframe>
                    <!-- end iframe -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Ends -->

</div>

<!-- Categories Start -->


<!-- Courses Start -->
<!-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Livres Populaires</h6>
            !-- <h1 class="mb-5">Populaires</h1> --
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('public/assets/img/course-1.jpg') }}" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                style="border-radius: 0 30px 30px 0;">Join Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">$149.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(123)</small>
                        </div>
                        <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                            Students</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('public/assets/img/course-2.jpg') }}" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                style="border-radius: 0 30px 30px 0;">Join Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">$149.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(123)</small>
                        </div>
                        <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                            Students</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('public/assets/img/course-3.jpg') }}" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                style="border-radius: 0 30px 30px 0;">Join Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">$149.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(123)</small>
                        </div>
                        <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                            Students</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Courses End -->


<!-- Team Start -->
<!-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Notre equipe</h6>
            <h1 class="mb-5">Expert Instructors</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('public/assets/img/team-1.jpg') }}" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Instructor Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('public/assets/img/team-2.jpg') }}" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Instructor Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('public/assets/img/team-3.jpg') }}" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Instructor Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('public/assets/img/team-4.jpg') }}" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Instructor Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Team End -->


<!-- Temoignage Start -->
<!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
            <h1 class="mb-5">Our Students Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('public/assets/img/testimonial-1.jpg') }}"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('public/assets/img/testimonial-2.jpg') }}"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('public/assets/img/testimonial-3.jpg') }}"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('public/assets/img/testimonial-4.jpg') }}"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Temoignage End -->
@include('layouts.jquery')
<script type="text/javascript">
jQuery(document).ready(function() {
    console.log(111);
});
</script>
<script type="text/javascript">
console.log(111);
jQuery('#lirelivre').on('show.bs.modal', function(event) {
    var button = jQuery(event.relatedTarget);
    var src = button.data('src');
    var modal = jQuery(this);
    jQuery('#preview_doc').attr('src', src);
    console.log(src);
    modal.find('.modal-body #preview_doc').attr('src', src);
});
</script>
@stop
@section('js')
<!--Local Stuff-->
<script>
jQuery(document).ready(function($) {
    "use strict";

    // Pie chart flotPie1
    var piedata = [{
            label: "Desktop visits",
            data: [
                [1, 32]
            ],
            color: '#5c6bc0'
        },
        {
            label: "Tab visits",
            data: [
                [1, 33]
            ],
            color: '#ef5350'
        },
        {
            label: "Mobile visits",
            data: [
                [1, 35]
            ],
            color: '#66bb6a'
        }
    ];

    $.plot('#flotPie1', piedata, {
        series: {
            pie: {
                show: true,
                radius: 1,
                innerRadius: 0.65,
                label: {
                    show: true,
                    radius: 2 / 3,
                    threshold: 1
                },
                stroke: {
                    width: 0
                }
            }
        },
        grid: {
            hoverable: true,
            clickable: true
        }
    });
    // Pie chart flotPie1  End
    // cellPaiChart
    var cellPaiChart = [{
            label: "Direct Sell",
            data: [
                [1, 65]
            ],
            color: '#5b83de'
        },
        {
            label: "Channel Sell",
            data: [
                [1, 35]
            ],
            color: '#00bfa5'
        }
    ];
    $.plot('#cellPaiChart', cellPaiChart, {
        series: {
            pie: {
                show: true,
                stroke: {
                    width: 0
                }
            }
        },
        legend: {
            show: false
        },
        grid: {
            hoverable: true,
            clickable: true
        }

    });
    // cellPaiChart End
    // Line Chart  #flotLine5
    var newCust = [
        [0, 3],
        [1, 5],
        [2, 4],
        [3, 7],
        [4, 9],
        [5, 3],
        [6, 6],
        [7, 4],
        [8, 10]
    ];

    var plot = $.plot($('#flotLine5'), [{
        data: newCust,
        label: 'New Data Flow',
        color: '#fff'
    }], {
        series: {
            lines: {
                show: true,
                lineColor: '#fff',
                lineWidth: 2
            },
            points: {
                show: true,
                fill: true,
                fillColor: "#ffffff",
                symbol: "circle",
                radius: 3
            },
            shadowSize: 0
        },
        points: {
            show: true,
        },
        legend: {
            show: false
        },
        grid: {
            show: false
        }
    });
    // Line Chart  #flotLine5 End
    // Traffic Chart using chartist
    if ($('#traffic-chart').length) {
        var chart = new Chartist.Line('#traffic-chart', {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            series: [
                [0, 18000, 35000, 25000, 22000, 0],
                [0, 33000, 15000, 20000, 15000, 300],
                [0, 15000, 28000, 15000, 30000, 5000]
            ]
        }, {
            low: 0,
            showArea: true,
            showLine: false,
            showPoint: false,
            fullWidth: true,
            axisX: {
                showGrid: true
            }
        });

        chart.on('draw', function(data) {
            if (data.type === 'line' || data.type === 'area') {
                data.element.animate({
                    d: {
                        begin: 2000 * data.index,
                        dur: 2000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect
                            .height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });
    }
    // Traffic Chart using chartist End
    //Traffic chart chart-js
    if ($('#TrafficChart').length) {
        var ctx = document.getElementById("TrafficChart");
        ctx.height = 150;
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                datasets: [{
                        label: "Visit",
                        borderColor: "rgba(4, 73, 203,.09)",
                        borderWidth: "1",
                        backgroundColor: "rgba(4, 73, 203,.5)",
                        data: [0, 2900, 5000, 3300, 6000, 3250, 0]
                    },
                    {
                        label: "Bounce",
                        borderColor: "rgba(245, 23, 66, 0.9)",
                        borderWidth: "1",
                        backgroundColor: "rgba(245, 23, 66,.5)",
                        pointHighlightStroke: "rgba(245, 23, 66,.5)",
                        data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
                    },
                    {
                        label: "Targeted",
                        borderColor: "rgba(40, 169, 46, 0.9)",
                        borderWidth: "1",
                        backgroundColor: "rgba(40, 169, 46, .5)",
                        pointHighlightStroke: "rgba(40, 169, 46,.5)",
                        data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
                    }
                ]
            },
            options: {
                responsive: true,
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                }

            }
        });
    }
    //Traffic chart chart-js  End
    // Bar Chart #flotBarChart
    $.plot("#flotBarChart", [{
        data: [
            [0, 18],
            [2, 8],
            [4, 5],
            [6, 13],
            [8, 5],
            [10, 7],
            [12, 4],
            [14, 6],
            [16, 15],
            [18, 9],
            [20, 17],
            [22, 7],
            [24, 4],
            [26, 9],
            [28, 11]
        ],
        bars: {
            show: true,
            lineWidth: 0,
            fillColor: '#ffffff8a'
        }
    }], {
        grid: {
            show: false
        }
    });
    // Bar Chart #flotBarChart End
});
</script>

@stop