@extends('layouts.presentationLayout')

@section('style')
<style>
    .card {
        float: left;
        width: 33.333%;
        padding: .75rem;
        margin-bottom: 2rem;
        border: 0;
    }

    .card > img {
        margin-bottom: .75rem;
    }

    .card-text {
        font-size: 85%;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach($presentations as $presentation)
        <div class="card">
            <a href="/{{str_replace(' ','-',$presentation->title_pres)}}/0"><img data-src="holder.js/100px280/thumb" alt="Mini image de presentation"></a>
            <p class="card-title">{{$presentation->title_pres}}</p>
            <p class="card-text">{{$presentation->description}}</p>
        </div> 
        @endforeach
    </div>
</div>
@endsection
