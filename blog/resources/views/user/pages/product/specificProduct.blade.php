@extends('user.layouts.website_master')

@section('title')
 Product
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
        <li class="breadcrumb-item">
          <a href="{{url('/user/product')}}">Product</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
      </ol>
    </div>
  </div>
  <!-- //page details -->
@endsection

@section('content')
<!-- gallery -->
    <div class="gallery py-5" id="gallery">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-5 text-wh font-weight-bold">{{$product->name}}
                <span>Price: {{$product->price}} {{$product->currency}}/{{$product->unit}} </span>
            </h3>
            <div class="news-grids gal text-center">
                <div class="row">
                    
                    <div class="card">
                        <div class="card-header">
                            <h5>{{$product->name}}</h5>
                        </div>
                        <div class="card-body">
                            <div class="col">
                            	<img src="{{URL::asset($product->photo)}}" class="img img-responsive img-fluid">	
                            </div>
                            <div class="col">
                            	<p>{{$product->description}}</p>
                            	<span>Price:{{$product->price}} {{$product->currency}}/{{$product->unit}}</span>	
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



