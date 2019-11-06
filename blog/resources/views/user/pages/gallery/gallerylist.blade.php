@extends('user.layouts.website_master')

@section('title')
 Gallery
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
        <li class="breadcrumb-item">
          <a href="{{url('/user/gallery')}}">Album</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
      </ol>
    </div>
  </div>
  <!-- //page details -->
@endsection

@section('content')
<!-- gallery -->
    <div class="gallery py-5" id="gallery">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-5 text-wh font-weight-bold">Gallery
                <span>Album:{{$album->name}}</span>
            </h3>
            <div class="news-grids gal text-center">
                <div class="row">
                    @foreach($gallery as $row)
                    <div class="col-md-4 gal-img">
                        <span class="text-danger"><h4>{{$row->title}}</h4></span>    
                        <a href="#gal{{$row->id}}"><img src="{{URL::asset($row->image)}}" alt="{{$row->title}}" class="img-fluid"></a>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="center">
                          <ul class="pagination">
                            <li>{{$gallery->links()}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery popups -->
    <!-- popup-->
    @foreach($gallery as $row)
    <div id="gal{{$row->id}}" class="popup-effect">
        <div class="popup">
            <img src="{{URL::asset($row->image)}}" alt="Popup Image" class="img-fluid" />
            <h3 class="title font-weight-bold let mt-3 mb-2">{{$row->title}}</h3>
            <p>{{$row->album->name}}</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    @endforeach
    <!--End of Popups  -->
@endsection



