
@extends('user.layouts.website_master')

@section('app_title','News Details')

@section('styles')

<style>
span{
    color:grey;
}

span,h4,p,h2{
    text-align:right;
}

    
</style>



@endsection


@section('content')

<section id="sliderSection" style="min-height:400px">
    <div class="row">
    
        <div class="col-md-12">
    
          
            <div class="row">
                   
                    <div class="col-md-9">
                            @if(App::getLocale()=='fa')
                                <h2><span>عنوان کتاب </span>: {{$book->fa_book_title}}</h2>
                                <h4><span>تاریخ نشر کتاب</span> : {{$book->book_publish_date}}</h4>
                                <h4><span>نویسنده کتاب </span>: {{$book->fa_book_author}}</h4>
                                <h4><span>جزییات کتاب </span></h4>
                                <p>
                                    {{$book->fa_book_description}}</p>
                                
                                    <p class="text-right">

                                <a href="{{URL::to('book_files/'.$book->book)}}" class="btn btn-success" style="text-align:right">دانلود کتاب</a>
                                    </p>

                            @elseif(App::getLocale()=='ps')

                                <h2><span>د کتاب عنوان  </span>: {{$book->ps_book_title}}</h2>
                                <h4><span>د کتاب تاریخ نشر</span> : {{$book->book_publish_date}}</h4>
                                <h4><span>د کتاب نویسنده </span>: {{$book->ps_book_author}}</h4>
                                <h4><span>د کتاب جزییات </span></h4>
                                <p>
                                    {{$book->ps_book_description}}</p>

                                    <p class="text-right">
                                <a href="{{URL::to('book_files/'.$book->book)}}" class="btn btn-success">د کتاب دانلود</a>
                                    </p>

                            @else 
                                <h2><span>الکتاب عنوان </span>: {{$book->ar_book_title}}</h2>
                                <h4><span>الکتاب تاریخ نشر</span> : {{$book->book_publish_date}}</h4>
                                <h4><span>الکتاب نویسنده </span>: {{$book->ar_book_author}}</h4>
                                <h4><span>الکتاب جزییات </span></h4>
                                <p>
                                    {{$book->ar_book_description}}</p>

                                <p clas="text-right">
                                <a href="{{URL::to('book_files/'.$book->book)}}" class="btn btn-success">دانلود الکتاب</a>
                                </p>



                            @endif
                           
        
                    </div>


                    <div class="col-md-3">
                            <img src="{{asset('book_images/'.$book->book_photo)}}" style="width:100%;" class="img-responsive"/>
                        </div>
                  

               
            </div>
           



    
       
    
        </div>
    
    </div>
    
    
</section>
    
    






@endsection
















