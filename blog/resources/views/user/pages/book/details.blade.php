
@extends('user.layouts.website_master')

@section('app_title','News Details')

@section('styles')

<style>
span{
    color:grey;
}

    
</style>



@endsection


@section('content')

<section id="sliderSection" style="min-height:400px">
    <div class="row">
    
        <div class="col-md-12">
    
          
            <div class="row">
                    <div class="col-md-3">
                            <img src="{{asset('book_images/'.$book->book_photo)}}" style="width:100%;" class="img-responsive"/>
                        </div>
                    <div class="col-md-9">
                            <h2><span>Book Title </span>: {{$book->book_title}}</h2>
                            <h4><span>Book Publish Date</span> : {{$book->book_publish_date}}</h4>
                            <h4><span>Book Author </span>: {{$book->book_author}}</h4>
                            <h4><span>Book Description </span></h4>
                            <p>
                                {{$book->book_description}}</p>

                            <a href="{{URL::to('book_files/'.$book->book)}}" class="btn btn-success">Download Book</a>
        
                    </div>
                  

               
            </div>
           



    
       
    
        </div>
    
    </div>
    
    
</section>
    
    






@endsection
















