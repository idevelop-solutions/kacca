@extends('user.layouts.website_master')

@section('app_title','News Details')

@section('styles')

<style>
    h2, p{
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
                        <h2 >{{$news->fa_news_title}}</h2>
                        <p>{{$news->news_date}}</p>
                    
                        <p>{{$news->fa_news_body}}</p>

                    @elseif(App::getLocale()=='ps')

                        <h2 >{{$news->ps_news_title}}</h2>
                        <p>{{$news->news_date}}</p>
                    
                        <p>{{$news->ps_news_body}}</p>

                    @else 
                        <h2 >{{$news->ar_news_title}}</h2>
                        <p>{{$news->news_date}}</p>
                    
                        <p>{{$news->ar_news_body}}</p>

                    @endif
                   

                </div>

                <div class="col-md-3">
                        <img src="{{asset('news_image/'.$news->news_photo)}}" style="width:100%;" class="img-responsive"/>
                </div>
            </div>
           



    
       
    
        </div>
    
    </div>
    
    
</section>
    
    





@endsection

