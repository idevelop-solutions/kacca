@extends('user.layouts.website_master')

@section('app_title','Book List')


@section('styles')

<style>

    
    #sliderSection  .list a {
    font-size: 16px;
    background: #4c4c4c;
    color: #ffffff;


}





span{
    color:grey;
}

</style>

@endsection

@section('content')

<section id="sliderSection">

   

     {{-- <h2 class="text-center">{{__('admin-top-navigation.latest_news')}}</h2> --}}


     <hr>

     



        @foreach($books as $book)

        <div class="row list" style="margin-bottom:40px;">
       

            <div class="col-sm-3">   
                <img style="width:100%;" class="img-responsive" src="{{asset('book_images/'.$book->book_photo)}}" alt="Mobirise" title="" media-simple="true" />
            </div>

           

            <div class="col-sm-6">

                    <h4 class="card-title">
                           <span> Book Title</span> : 
                           
                            {{$book->book_title}}
    
                        </h4>
                        <h4>
                                <span> Book Publish Date</span> : 
                                 {{$book->book_publish_date}}
                             </h4>
                        <h4><span>Book Description </span> </h4>
                        <p class="mbr-text mbr-fonts-style" style="font-size:16px;">
                                
    
                                {{$book->book_description}}
                                <a href="{{route('book.details',$book->id)}}">Read more...</a>
                        </p>
    
                      

            </div>

            <div class="col-sm-3"></div>

        
        </div>
        @endforeach

 

     <ul class="navigation">
         <li>{{$books->links()}}</li>
     </ul>






</section>





@endsection
