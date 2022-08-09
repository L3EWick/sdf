<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eventos;
use App\Models\Eventos_Images;


class EventosController extends Controller
{
   public function index() {


      $eventos = Eventos::all();
    
      return view('eventos.index', compact('eventos'));
   }

   public function create(){

      $eventos = Eventos::all();
      
      return view('eventos.create');

   }


   public function store(Request $request){

     

      $evento = new Eventos;

      $evento->nome       = $request->nome;
      $evento->descricao  = $request->descricao;

     

      $evento->save();
     
      foreach($request->image as $event)
      {        
         
         $filename_image = $event->store('storage/images/eventos');
         Eventos_Images::create([
            'eventos_id' => $evento->id,
            'image' => $filename_image,
        ]);
         
         // $file = $event->isFile('image');
         // $originalname = $file->getClientOriginalName();
         // $filename = md5(microtime()).'_'.$originalname;
         // $file->move('./storage/images/eventos', $filename);
        

         // $fedbeek = new Eventos_Images;
         // $fedbeek->eventos_id = $evento->id;
         // $fedbeek->image = $filename;    


      }

      return redirect()->route('eventos.index');

   }
}
