<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Slide extends Model
{
    public function presentation()
    {
        return $this->belongsTo('App\Presentation');
    }
    public function slide_element(){
    	return $this->hasOne('App\Slide_element');
    }
	public function file(){
		return $this->hasMany('App\File');
	}
    protected $fillable=['title_slide','description','presentation_id'];
    public $timestamps = true;


    public static function affichageSlide($title_pres,$number){
        $listSlides = Presentation::listSlideByPres(str_replace('-',' ',$title_pres));

        if($listSlides!=null){
            if($number>=0 && $number<count($listSlides)){
                
                //On récupère les éléments et on les mets dans un tableau
                $slide['elements']= Slide::elementsBySlide($listSlides[$number]->id);
                //On récupère les files et on les mets dans un tableau
                $slide['files'] = Slide::listFileBySlide($listSlides[$number]->id);
                //On récupère le nombre de files ce qui permettra de sélectionner le layout à utiliser dans le SlideController
                $slide['nbFiles'] = count($slide['files']);
                
                return $slide;

            }elseif($number<0){

                //Si on cherche à visionner la slide précédente alors que celle-ci est la première, on réaffiche la première
                $slide['elements']= Slide::elementsBySlide(0);
                $slide['files'] = Slide::listFileBySlide(0);
                $slide['nbFiles'] = count($slide['files']);
                return $slide;

            }else{

                $slideinfo = $listSlides[(count($listSlides)-1)];
                return $slideinfo;
                
            }
        }else{
            return view('home');
        }
    }

    //
    // Récupérer les éléments d'une slide (titre, sous-titre, texte)
    //

    public static function elementsBySlide($id){
        $slide_element = DB::table('slide_elements')
                            ->join('slides','slides.id','=','slide_elements.slide_id')
                            ->select('slide_elements.*')
                            ->where('slides.id','=',$id)
                            ->get();
        return $slide_element;
    }

    //
    // Réupérer la liste des files d'une slide (pictures, video)
    //

    public static function listFileBySlide($id){
        $files = DB::table('files')
                    ->join('slides','slides.id','=','files.slide_id')
                    ->select('files.*')
                    ->where('slides.id','=',$id)
                    ->get();
        return $files;
    }

    
}
