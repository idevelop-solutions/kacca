@extends('user.layouts.website_master')

@section('title')
News
@endsection
@section('style')
<style type="text/css">
    .newscard{
        margin-bottom:10px;
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
        <li class="breadcrumb-item active" aria-current="page">Updates About us</li>
      </ol>
    </div>
  </div>
  <!-- //page details -->
@endsection

@section('content')
<!-- gallery -->
    <div class="gallery py-5" id="gallery">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-5 text-wh font-weight-bold">Updates about us:
                <span>News, Exhibition, Events</span>
            </h3>
            <div class="news-grids gal text-center">
                <div class="row">
                    @foreach($news as $row)
                    <div class="card col-md-4 newscard">
                        <div class="card-header">
                            <h5>{{$row->title}}</h5>
                        </div>
                        <div class="card-body">
                            <img src="{{URL::asset($row->photo)}}" class="img img-responsive img-fluid">
                            <p>{{str_limit($row->description,200)}}</p>
                            <a href="{{url('user/news/'.$row->id)}}">Read More</a>
                        </div>
                    </div>
                    @endforeach 
                </div>
                <div class="row">
                    <div class="center">
                          <ul class="pagination">
                            <li>{{$news->links()}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



