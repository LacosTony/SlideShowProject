<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Slide;
use App\Presentation;

class SlideController extends Controller
{
    public function show($title_pres,$number)
    {
    	$presExist = Presentation::verifExist($title_pres);

    	if($presExist){
    		$slide = Slide::affichageSlide($title_pres,$number);
            $i=0;
            /*$test;
            foreach($slide['files'] as $file){
                $test[$i] = response()->download(storage_path('app/'.$file->path_file),null,[],null);
            }*/
    		
            foreach($slide['files'] as $file){
                $storage_path[$i]=storage_path('app/'.$file->path_file);
                $i++;
            }

            return view('layouts.testView',['slide'=>$slide,'storage_path'=>$storage_path,'number'=>$number]);//,'test'=>$test]);
    	}else{
    		
    		//ATTENTION A CHANGER
    		
    		return view('welcome');
    	}
    	
    }
}
