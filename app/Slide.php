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
                $slideinfo = $listSlides[$number];
                return $slideinfo;
            }elseif($number<0){
                $slideinfo = $listSlides[0];
                return $slideinfo;
            }else{
                $slideinfo = $listSlides[(count($listSlides)-1)];
                return $slideinfo;
            }
        }else{
            return view('home');
        }
    }

    public function elementsBySlide($id){
        $slide_element = DB::table('slide_elements')
                            ->join('slides','slides.id','=','slide_elements.slide_id')
                            ->select('slide_elements.*')
                            ->where('slides.id','=',$id)
                            ->get();
        return $slide_element;
    }

    public function listFileBySlide($id){
        $files = DB::table('files')
                    ->join('slides','slides.id','=','files.slide_id')
                    ->select('files.*')
                    ->where('slides.id','=',$id)
                    ->get();
        return $files;
    }

    
}
