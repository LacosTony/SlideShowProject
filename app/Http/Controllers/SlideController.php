<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;

class SlideController extends Controller
{
    public function show($title_pres,$number)
    {
    	$slide = Slide::affichageSlide($title_pres,$number);
    	return view('layouts.testView',['slide'=>$slide]);
    }
}
