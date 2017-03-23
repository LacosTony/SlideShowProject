<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function slides(){
		return $this->belongsTo('App\Slide');
	}
	protected $fillable = ['title_file','path_file','url','width','height','mimeType'];
	public $timestamps=true;
}
