@extends('layouts.navBar')

@section('title')
    <title>Liste des présentations</title>
@endsection

@section('style')
<style>
    .pres {
        float: left;
        width: 33.333%;
        padding: .75rem;
        margin-bottom: 2rem;
        border: 0;
    }

    .pres > img {
        margin-bottom: .75rem;
    }

    .pres-text {
        font-size: 85%;
    }

    .pres_option > li{
        display: inline;
        margin-right: 15px;
    }

</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach($presentations as $presentation)
        <div class="pres">
            <a href="/{{str_replace(' ','-',$presentation->title_pres)}}/?slide=0"><img data-src="holder.js/100px280/thumb" alt="Mini image de presentation"></a>
            <p class="pres-title">{{$presentation->title_pres}}</p>
            <p class="pres-text">{{$presentation->description}}</p>
            <p class="pres-edit">
                <ul class="pres_option">    
                    <li class="edit">
                        <a href="/{{str_replace(' ','-',$presentation->title_pres)}}/listSlides">Edit</a>
                    </li>
                    <li>
                        <a href="/{{str_replace(' ','-',$presentation->title_pres)}}/newSlide" class="new_slide">New slide</a> 
                    </li>
                </ul>
            </p>
        </div> 
        @endforeach
    </div>
</div>
@endsection
