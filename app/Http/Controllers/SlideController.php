<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Slide;
use App\Presentation;
use App\Slide_elementController;
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

    public function createSlide($title_pres){
        $num_slide=Presentation::countSlides($title_pres)+1;
        return view('createSlide',['title_pres'=>$title_pres,'num_slide'=>$num_slide]);
    }

    public function getListByPres($title_pres){
        $slides=Presentation::listSlideByPres($title_pres);
        return view('listSlides',['slides'=>$slides,'title_pres'=>$title_pres]);
    }

    public function saveSlide(Request $request){
        $slide = new Slide();
        $slide->title_slide = $request->get('title_slide');
        $slide->description = $request->get('description');
        $slide->presentation_id = Presentation::getPresIdByTitle($request->get('title_pres'));

        //TODO : save() + boucle for pour enregistrer les files
    }
}
