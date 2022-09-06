<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invertirBits extends Controller
{   
    public function index(){
        return view('invertirBits');
    }
    public function procesoInvertirBits(Request $request){
        $num_ing=(int)$request->decimal;
        $bin=str_pad(decbin($num_ing), 8, 0, STR_PAD_LEFT);
        $salida='';
        for($i=strlen($bin); $i>0; $i--){
            $salida.= $bin[$i-1];
        }
        $resultado = bindec($salida); 
        print_r('Numero Decimal: '.$resultado); exit;
    }
}
