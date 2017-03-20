<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function presentations()
    {
        return $this->belongsTo('App\Presentation');
    }
	public function composant(){
		return $this->morphTo();
	}
    protected $fillable=['title_slide','description','presentation_id'];
    public $timestamps = true;
}
