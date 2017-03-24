<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\File;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($title_pres,$filename){
    	$storagePath = storage_path('app/files/'.str_replace('-',' ',$title_pres).'/'.$filename);
    	$exists = Storage::disk('local')->exists('files/'.str_replace('-',' ',$title_pres).'/'.$filename);
    	
    	if($exists){
    		return response()->download($storagePath,null,[],null);
    	}else{
    		return view('layouts.fileNotFound');
    	}
    }
}
