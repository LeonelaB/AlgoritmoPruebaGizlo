<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serieNumeroPrimo extends Controller
{   
    public function index(){
        return view('serieNumeroPrimo');
    }
    public function procesoSerieNumeroPrimo(Request $request){
        
        $num_ing=(int)$request->cant_numero_primo;
        $cont=0;// contador de la cantidad de numeros primos
        $cont1=2;//contador de posibles numeros primos, se comienza con 2 debido que es el primer numero primo
        $salida=""; // concatenador
        do{
            $cont2=0; //contador de las veces de que la operacion del resto del dividendo sea 0
            $cont3="";
            //recorrido de los posibles numeros primos
            for ($i=1; $i <= $cont1 ; $i++) { 
                $res =$cont1 % $i;
                //Si el resto de la division es cero es un posible numero primo
                if($res==0){
                    $cont2++;
                    //Si aparece mas de dos veces es un numero compuesto
                    if($cont2>2){
                        $cont3="";
                        break;
                    }else{
                        $cont3=$cont1."<br>";
                    }
                }
            }
            //cantidad de numero primos  
            if(!empty($cont3)){$cont++;}
            //concatenación
            $salida.= $cont3;
            $cont1++;
        }
        while($cont<$num_ing);
       
       print_r($salida); exit;
      
    }
}
