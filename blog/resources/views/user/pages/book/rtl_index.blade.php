@extends('user.layouts.website_master')

@section('app_title','Book List')


@section('styles')

<style>

    
    #sliderSection  .list a {
    font-size: 16px;
    background: #4c4c4c;
    color: #ffffff;


}

h4, span,p{
    text-align:right;
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
       

            <div class="col-sm-3"></div>

           

            <div class="col-sm-6">

                    <h4 class="card-title">
                          

                           @if(App::getLocale()=='fa')
                           <span>عنوان کتاب</span> :
                           {{$book->fa_book_title}}

                           @elseif(App::getLocale()=='ps')
                             <span>  د کتاب عنوان </span> :
                           {{$book->ps_book_title}}

                           @else

                           <span> الکتاب عنوان</span> :
                           {{$book->ar_book_title}}


                           @endif
                           
                         
    
                        </h4>
                        <h4>
                            @if(App::getLocale()=='fa')
                               <span> تاریخ انتشار کتاب</span>  : 

                            @elseif(App::getLocale()=='ps')
                            <span>   د کتاب تاریخ انتشار</span> : 

                            @else 
                            <span>   الکتاب تاریخ انتشار</span>  :

                            @endif
                                 {{$book->book_publish_date}}
                             </h4>

                             @if(App::getLocale()=='fa')
                                <h4><span>جزییات کتاب </span> </h4>
                                <p class="" style="font-size:16px;">
                                        
            
                                        {{$book->fa_book_description}}
                                        <a href="{{route('book.details',$book->id)}}">....خواندن بیشتر </a>
                                </p>


                             @elseif(App::getLocale()=='ps')
                                <h4><span>د کتاب جزییات  </span> </h4>
                                <p class="mbr-text mbr-fonts-style" style="font-size:16px;">
                                        
            
                                        {{$book->ps_book_description}}
                                        <a href="{{route('book.details',$book->id)}}">...نور لوستل   </a>
                                </p>


                             @else 

                                <h4><span>الکتاب جزییات </span> </h4>
                                <p class="mbr-text mbr-fonts-style" style="font-size:16px;">
                                        
            
                                        {{$book->ar_book_description}}
                                        <a href="{{route('book.details',$book->id)}}">...خواندن بیشتر   </a>
                                </p>



                             @endif
                      
    
                      

            </div>

            <div class="col-sm-3">   
                    <img style="width:100%;" class="img-responsive" src="{{asset('book_images/'.$book->book_photo)}}" alt="Mobirise" title="" media-simple="true" />
                </div>

          

        
        </div>
        @endforeach

 

     <ul class="navigation">
         <li>{{$books->links()}}</li>
     </ul>






</section>





@endsection
