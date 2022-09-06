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
       if($this->cuadradoPerfecto(5*$num_ing*$num_ing+4)|| $this->cuadradoPerfecto(5*$num_ing*$num_ing-4)){
            $resultado='Si pertenece a la serie Fibonacci ';
       } else{
            $resultado='No pertenece a la serie Fibonacci ';
       }
       print_r($resultado); exit;
      
    }

    public function cuadradoPerfecto($num){
        $resp = (int)(sqrt($num));
        $resp*$resp==$num ? $bool= true : $bool= false;
        return $bool;
    }
}
