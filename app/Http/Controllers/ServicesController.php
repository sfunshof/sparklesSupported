<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function personal(){
        return view('pages.services.personal');
    }

    public function specialist(){
        return view('pages.services.specialist');
    }

    public function palliative(){
        return view('pages.services.palliative');
    }

    public function dementia(){
        return view('pages.services.dementia');
    }
    
    public function support(){
        return view('pages.services.support');
    }

    public function elderly(){
        return view('pages.services.elderly');
    }

    public function respite(){
        return view('pages.services.respite');
    }
     
    public function hospital(){
        return view('pages.services.hospital');
    }

    public function livein(){
        return view('pages.services.livein');
    }
    public function services_all(){
        return view('pages.services.services_all');
    }

}
