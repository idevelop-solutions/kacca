@extends('user.layouts.website_master')

@section('title')
Products
@endsection
@section('style')
<style type="text/css">
    .productcard{
        margin-bottom:25px;
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
        <li class="breadcrumb-item active" aria-current="page">All products</li>
      </ol>
    </div>
  </div>
  <!-- //page details -->
@endsection

@section('content')
<!-- gallery -->
    <div class="gallery py-5" id="gallery">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-5 text-wh font-weight-bold">Our Products:
                <span></span>
            </h3>
            <div class="news-grids gal text-center">
                <div class="row">
                    @foreach($product as $row)
                    <div class="card col-md-4 productcard">
                        <div class="card-header bg-danger text-white">
                            <h5>{{$row->name}}</h5>
                            <h6>{{$row->price}} {{$row->currency}}/{{$row->unit}}</h6>
                        </div>
                        <div class="card-body">
                            <img src="{{URL::asset($row->photo)}}" class="img img-responsive img-fluid">
                            <p>{{str_limit($row->description,150)}}</p>
                            <a href="{{url('user/product/'.$row->id)}}">Read More</a>
                        </div>
                    </div>
                    @endforeach 
                </div>
                <div class="row">
                    <div class="center">
                          <ul class="pagination">
                            <li>{{$product->links()}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection