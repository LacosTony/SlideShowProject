<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide_element extends Model
{
    public function slides(){
		return $this->morphMany('App\Slide','composant');
	}
	protected $fillable = ['title','subtitle','text'];
	public $timestamps = true;
}
