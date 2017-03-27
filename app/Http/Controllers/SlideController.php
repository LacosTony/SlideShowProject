<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Slide;
use App\Presentation;
use Illuminate\Support\Facades\Input;

class SlideController extends Controller
{
    public function show($title_pres)
    {
        $number=Input::get('slide');
    	$presExist = Presentation::verifExist($title_pres);

    	if($presExist){
    		$slide = Slide::affichageSlide($title_pres,$number);
            $nbMaxSlide = Presentation::countSlides($title_pres);

            return view('layouts.testView',['slide'=>$slide,'number'=>$number,'nbMaxSlide'=>$nbMaxSlide,'title_pres'=>$title_pres]);
    	}else{
    		
    		//ATTENTION A CHANGER
    		
    		return redirect('/home');
    	}
    	
    }
}
