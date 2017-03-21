<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    public function slides()
    {
        return $this->hasMany('App\Slide');
    }
    protected $fillable = ['title_pres','description'];
    public $timestamps = true;

    //
    //Liste des informations de toutes les slides d'une présentation
    //
    public static function listSlideByPres($title_pres){
        $slides = DB::table('slides')
                    ->join('presentations','presentations.id','=','slides.presentation_id')
                    ->select('slides.*')
                    ->where('presentations.title_pres','=',str_replace('-',' ',$title_pres))
                    ->get();
        return $slides;
    }

    //
    //Vérification si la présentation existe déja
    //
    public static function verifExist($title_pres){
    	$presentations = DB::table('presentations')
    						->select('presentations.title_pres')
    						->get();
    	$value = false;

    	foreach ($presentations as $pres_val) {
    		if($pres_val->title_pres == $title_pres){
    			$value=true;
    		}
    	}
    	return $value;
    }
}
