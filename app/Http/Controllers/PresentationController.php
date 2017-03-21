
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Presentation;

class PresentationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        $presentations = Presentation::all();
        return view('presentation',['presentations'=>$presentations]);
    }

    public function show($id)
    {
    	$presentation = Presentation::with('slides')->findOrFail($id);
    	$title_pres = $presentation->title_pres;
    }
}
