@extends('layouts.navBar')

@section('title')
    <title>Liste des slides</title>
@endsection

@section('style')
<style>
    .slide {
        float: left;
        width: 20%;
        padding: .75rem;
        margin-bottom: 2rem;
        border: 0;
    }

    .slide > img {
        margin-bottom: .75rem;
    }

    .slide-text {
        font-size: 85%;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach($slides as $slide)
        <div class="slide">
            <!--<img data-src="" alt="">-->
            <p class="slide-edit">
                <p>{{$slide->title_slide}}</p>
                <a href="#">Edit</a>
            </p>
        </div> 
        @endforeach
    </div>
</div>
@endsection