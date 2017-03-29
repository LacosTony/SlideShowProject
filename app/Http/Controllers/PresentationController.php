<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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


    public function createPres(){
        return view('createPres');
    }

    public function savePres(Request $request){

        $presentation = new Presentation();
        $presentation->title_pres = $request->get('title_pres');
        $presentation->description = $request->get('description');

        $value = Presentation::verifExist($presentation->title_pres);

        if(!$value){
            
            Presentation::createDir($presentation);

            $path_min = storage_path('app/files/'.$presentation->title_pres);
            $mimeType = Input::file('miniature')->getMimeType();

            if($mimeType=="image/jpeg"){
                $name = "_min.jpeg";
            }elseif($mimeType=="image/png"){
                $name="_min.png";
            }elseif($mimeType=="image/gif"){
                $name="_min.gif";
            }
            
            $filename = $name;

            // Attention, ici nous n'avons pas une miniature mais l'image elle-même et nous allons définir la taille au niveau du "/home"
            Input::file('miniature')->move($path_min,$filename);

            return redirect('/home');

        }else{

            //IL faudra passer un parametre lors du redirect de façon à afficher une box comme quoi la présentation existe déjà
            return redirect('/newPres');
        }
        
    }

}
