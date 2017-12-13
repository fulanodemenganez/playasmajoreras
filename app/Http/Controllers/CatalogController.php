<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capa;

class CatalogController extends Controller
{



     public function getIndex()  {

       $capas=Capa::all(); 
       return view('catalog.index',['capas'=>$capas]);  
    }

     public function getShow($id){

       $capas=Capa::findOrFail($id); 
       return view('catalog.show', ['capa'=>$capas]); 
    }


     public function getCreate(){

        return view('catalog.create');
    }

    public function getEdit($id){

        $capas=Capa::findOrFail($id);
        return view('catalog.edit', ['capa'=>$capas]);
    }
}
