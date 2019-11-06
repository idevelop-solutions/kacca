@extends('user.layouts.website_master')

@section('title')
 Contact Us
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
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
      </ol>
    </div>
  </div>
  <!-- //page details -->
@endsection

@section('content')
<!-- contact  -->
  <section class="contact py-5">
    <div class="container py-xl-5 py-lg-3">
      <h3 class="title-w3 mb-5 font-weight-bold">Contact Us <span>Send Message</span></h3>
      @if (session()->has('mailerror'))
      <h3 class="title-w3 mb-5 font-weight-bold"><span>{{$session('mailerror')}}</span></h3>
      @endif
      @if (session()->has('success'))
      <h3 class="title-w3 mb-5 font-weight-bold"><span>{{$session('success')}}</span></h3>
      @endif
      <div class="row">
        <!-- contact form -->
        <div class="col-lg-6 contact-us1-bottom w3layouts-w3ls">
          <form action="{{url('/user/sendEmail')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}" placeholder="Name" name="name" required="">
                      @if($errors->has('name'))
                           <span class="help-block">
                              <strong>{{$errors->first('name')}}</strong>
                           </span>
                      @endif
            </div>
            <div class="form-group">
              <input type="email" class="form-control {{$errors->has('from')?'is-invalid':''}}" placeholder="Email" name="from" required="">
                      @if($errors->has('from'))
                           <span class="help-block">
                              <strong>{{$errors->first('from')}}</strong>
                           </span>
                      @endif
            </div>
            <div class="form-group">
              <input type="text" class="form-control {{$errors->has('subject')?'is-invalid':''}}" placeholder="Subject" name="subject" required="">
                      @if($errors->has('subject'))
                           <span class="help-block">
                              <strong>{{$errors->first('subject')}}</strong>
                           </span>
                      @endif
            </div>
            <div class="form-group">
              <textarea class="form-control {{$errors->has('message')?'is-invalid':''}}" placeholder="Message" name="message" required=""></textarea>

                      @if($errors->has('message'))
                           <span class="help-block">
                              <strong>{{$errors->first('message')}}</strong>
                           </span>
                      @endif
            </div>
            <button type="submit" class="btn">Submit</button>
          </form>
        </div>
        <!-- //contact form -->
        <!-- contact address -->
        <div class="col-lg-6 home-radio-clock mt-lg-0 mt-5">
          <h3 class="tittle text-dark mb-5 font-weight-bold">Get In Touch</h3>
          <div class="row">
            <div class="col-4">
              <ul class="list-unstyled">
                <li><i class="fa fa-envelope mr-2" aria-hidden="true"></i>Address</li>
                <li class="my-5"><i class="fa fa-phone mr-2" aria-hidden="true"></i>Call Us</li>

                <li class="my-5"><i class="fa fa-envelope mr-2" aria-hidden="true"></i>Email</li>
                <li><i class="fa fa-clock-o mr-2" aria-hidden="true"></i>Branches:</li>
              </ul>
            </div>
            <div class="col-8">
              <div class="home-radio-clock-right">
                <ul class="list-unstyled">
                  <li>232,Kart-e-Seh road Aloding,
                    <span>Kabul, Afghanistan</span></li>
                  <li class="my-4">(020) 254433
                    <span>(0093) 784689192</span>
                  </li>
                  <li class="my-4"><span>info@arizozeeba.af</span>
                  </li>
                  <li>Kabul Branch:<span>Mandavi,Kabul Afghanistan</span></li>
                  <li>Ghazni Branch:<span>Mandavi,Ghazni Afghanistan</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- //contact address -->
      </div>
    </div>
  </section>
  <!-- map -->
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359195.17562375!2d-113.7156245614499!3d36.2473834534249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471497559566"
     style="border:0" allowfullscreen=""></iframe>
  </div>
  <!-- //map -->
  <!-- //contact -->

@endsection



