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
        //Esta parte de aqui rellena la cantidad de 8 bits con 0 y decbin lo transforma de decimal a binario
        $bin=str_pad(decbin($num_ing), 8, 0, STR_PAD_LEFT);
        $salida='';
        //Recorre e invierte el binario
        for($i=strlen($bin); $i>0; $i--){
            $salida.= $bin[$i-1];
        }
        //Transforma de binario a decimal  
        $resultado = bindec($salida); 
        print_r('Numero Decimal: '.$resultado); exit;
    }
}
