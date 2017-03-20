<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide_element extends Model
{
	public function slide(){
		return $this->belongsTo('App\Slide');
	}
	protected $fillable = ['title','subtitle','text'];
	public $timestamps = true;
}
