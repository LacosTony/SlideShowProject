<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\File;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($filename){
    	$storagePath = storage_path('app/files/pictures/'.$filename);
    	
    	if(File::exists($storagePath)){
    		return response()->download($storagePath,null,[],null);
    	}else{
    		return view('layouts.fileNotFound');
    	}
    }
}
