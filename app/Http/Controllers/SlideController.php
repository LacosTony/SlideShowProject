<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use App\Presentation;

class SlideController extends Controller
{
    public function show($title_pres,$number)
    {
    	$presExist = Presentation::verifExist($title_pres);

    	if($presExist){
    		$slide = Slide::affichageSlide($title_pres,$number);
    		return view('layouts.testView',['slide'=>$slide]);
    	}else{
    		
    		//ATTENTION A CHANGER
    		
    		return view('welcome');
    	}
    	
    }
}
