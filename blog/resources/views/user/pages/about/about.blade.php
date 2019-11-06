@extends('user.layouts.website_master')

@section('title')
About
@endsection
@section('style')
<style type="text/css">
    
</style>
@endsection
@section('top')
  <div class="main-banner-2" id="home">
        <!-- header -->
        @include('user.includes.navigation')
        <!-- //header -->
    </div>
    <!-- page details -->
  <div class="breadcrumb-w3ls py-1">
    <div class="container">
      <ol class="breadcrumb m-0">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
      </ol>
    </div>
  </div>
  <!-- //page details -->
@endsection

@section('content')
    <!-- about  -->
    <section class="about-inner py-5">
        <div class="container pt-xl-5 pt-lg-3">
            <h3 class="title-w3 mb-5 font-weight-bold">About Us <span>Arizo Zeeba</span></h3>
            <div class="row">
                <div class="col-lg-6 w3lsits_works-grid mt-xl-4">
                    <div class="wthree-bottom">
                        <h6 class="subheading-w3ls text-uppercase text-dark mb-4">Overview <span class="font-weight-bold"></span></h6>
                        <p>Arizo Zeeba is the most biggest dry fruit exporter of Afghanistan. We export different types of fruits in each season of year.Arizo Zeeba is the most biggest dry fruit exporter of Afghanistan. We export different types of fruits in each season of year.</p>
                        <p>Arizo Zeeba is the most biggest dry fruit exporter of Afghanistan. We export different types of fruits in each season of year.Arizo Zeeba is the most biggest dry fruit exporter of Afghanistan. We export different types of fruits in each season of year.</p>
                    </div>
                </div>
                <div class="col-lg-6 w3lsits_works-grid1 mt-lg-0 mt-sm-5 mt-4">
                    <img src="{{URL::asset('images/logo.jpg')}}" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->

    <!-- middle -->
    <section class="what-w3ls">
        <div class="container-fluid py-xl-5 py-lg-3">
            <div class="offset-xl-7 offset-lg-6 offset-md-4 offset-sm-2">
                <div class="grids-whtas pr-xl-5">
                    <h3 class="tittle text-wh mb-5 font-weight-bold">Our Mission & Vision</h3>
                    <p class="lead text-li">-Mission-Arizo Zeeba is the most biggest dry fruit exporter of Afghanistan. We export different types of fruits in each season of year.</p>
                    <hr class="my-4">
                    <p class="text-li">-Vision-Packing and cleaning of fruits peform in Afghanistna. Average each season we offer 100 of job opportunity for women in Afghanistan for packing and cleaning</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //middle -->

    <!-- team -->
    <section class="team pb-5" id="farmer">
        <div class="container pb-xl-5 pb-lg-3">
            <h3 class="title-w3 mb-5 font-weight-bold">Our Team <span></span></h3>
            <div class="row inner-sec-w3layouts-w3pvt-lauinfo">
                <div class="col-md-4 team-grids text-center">
                    <img src="{{URL::asset('images/team1.jpg')}}" class="img-fluid" alt="">
                    <div class="team-info">
                        <div class="caption mb-3">
                            <h4>Name</h4>
                        </div>
                        <div class="social-icons-section">
                            <a class="fac" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter mx-2" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="google" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 team-grids my-md-0 my-4 text-center">
                    <img src="{{URL::asset('images/team1.jpg')}}" class="img-fluid" alt="">
                    <div class="team-info">
                        <div class="caption mb-3">
                            <h4>Name</h4>
                        </div>
                        <div class="social-icons-section">
                            <a class="fac" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter mx-2" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="google" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 team-grids text-center">
                    <img src="{{URL::asset('images/team1.jpg')}}" class="img-fluid" alt="">
                    <div class="team-info">
                        <div class="caption mb-3">
                            <h4>Name</h4>
                        </div>
                        <div class="social-icons-section">
                            <a class="fac" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter mx-2" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="google" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team -->

    <!-- testimonials -->
    <div class="testimonials py-5" id="testi">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-5 text-wh font-weight-bold">Our Nation & International Partners
                <span></span>
            </h3>
            <div class="carousel-inner">
                <div class="row">
                    <!-- <div class="col-lg-6 w3_testimonials_grid">
                        <div class="bg-wh p-sm-5 p-4">
                            <p class="sub-test-w3ls">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                impedit quo minus id quod possimus, omnis voluptas.
                            </p>
                            <div class="row mt-5">
                                <div class="col-3 testi-img-res">
                                    <img src="images/te1.jpg" alt=" " class="img-fluid" />
                                </div>
                                <div class="col-9 w3_testi_grid mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                                    <h5 class="mb-2">Thomas Carl</h5>
                                    <p>Sed do eiusmod</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-6 w3_testimonials_grid mt-lg-0 mt-4">
                        <div class="bg-wh p-sm-5 p-4">
                            <p class="sub-test-w3ls">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                impedit quo minus id quod possimus, omnis voluptas.
                            </p>
                            <div class="row mt-5">
                                <div class="col-3 testi-img-res">
                                    <img src="images/te2.jpg" alt=" " class="img-fluid" />
                                </div>
                                <div class="col-9 w3_testi_grid  mt-xl-3 mt-lg-2 mt-md-4 mt-2">
                                    <h5 class="mb-2">Adam Ster</h5>
                                    <p>Sed do eiusmod</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                

            <div class="slide-imaes">
            </div>
            </div>
        </div>
    </div>
    <!-- //Slider of Partners -->
@endsection