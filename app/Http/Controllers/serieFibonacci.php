<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serieFibonacci extends Controller
{   
    public function index(){
        return view('serieFibonacci');
    }
    public function procesoSerieFibonacci(Request $request){
       $num_ing=(int)$request->decimal;
       //Se realizo la funcion cuadradoPerfecto para no estar repitiendo el mismo proceso
       if($this->cuadradoPerfecto(5*$num_ing*$num_ing+4)|| $this->cuadradoPerfecto(5*$num_ing*$num_ing-4)){
            $resultado='Si pertenece a la serie Fibonacci ';
       } else{
            $resultado='No pertenece a la serie Fibonacci ';
       }
       print_r($resultado); exit;
      
    }

    public function cuadradoPerfecto($num){
        //debe de sacar el cuadrado perfecto 
        $resp = (int)(sqrt($num));
        //el resultado del cuadrado perfecto se debe de multiplicar para si mismo y debe de ser igual el numero que llego por medio de las formulas, si es true pertenece a la serie caso contrario no pertenece
        $resp*$resp==$num ? $bool= true : $bool= false;
        return $bool;
    }
}
