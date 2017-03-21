<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    public function show($presentation,$id)
    {
    	//$presentation = DB::table('presentations')->where('title_pres',str_replace('-',' ',$presentation))->get();

    }
}
