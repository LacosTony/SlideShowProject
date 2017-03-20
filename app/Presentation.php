<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    public function slides()
    {
        return $this->hasMany('App\Slide');
    }
    protected $fillable = ['title_pres','description'];
    public $timestamps = true;
}
