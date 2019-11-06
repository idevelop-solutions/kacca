@extends('user.layouts.website_master')

@section('title')
 Album
@endsection
@section('style')
<style type="text/css">
    .gal-img{

        margin-bottom: 20px;
    }
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
        <li class="breadcrumb-item active" aria-current="page">Albums</li>
      </ol>
    </div>
  </div>
  <!-- //page details -->
@endsection

@section('content')
<!-- gallery -->
    <div class="gallery py-5" id="gallery">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-5 text-wh font-weight-bold">List of Albums
                <span></span>
            </h3>
            <div class="news-grids gal text-center">
                <div class="row">
                    @foreach($album as $row)
                    <div class="col-md-4 gal-img">
                        <span class="text-danger"><h4>{{$row->name}}</h4></span>    
                        <a href="{{url('user/gallery/'.$row->id)}}"><img src="{{URL::asset('images/d1.jpg')}}" alt="{{$row->name}}" class="img-fluid"></a>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="center">
                          <ul class="pagination">
                            <li>{{$album->links()}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



