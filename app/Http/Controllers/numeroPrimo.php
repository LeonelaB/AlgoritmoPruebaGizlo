<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class numeroPrimo extends Controller
{   
    public function index(){
        return view('numeroPrimo');
    }
    public function procesoNumeroPrimo(Request $request){
        $resultado="Es un número Primo";
        $cont=0;
        $num_ing=(int)$request->num_primo;

        if($num_ing == 1 || $num_ing == 0){
            $resultado= "No es número primo ni compuesto";
        }else{
            /*  Recorre la longitud menor del número ingresado 
                Comienza realizar la operación de la division para sacar el residuo 
                Se coloco un contador para saber cuantas veces saco el residuo 0, si en la división el residuo sale 0 mas de 2 veces ya es un numero compuesto 
            */
            for ($i=1; $i <=  $num_ing ; $i++) { 
                if($num_ing%$i ==0){
                    $cont++;
                    if($cont>2){$resultado="Es un numero Compuesto"; break;}
                }
                
            }
        }
       print_r($resultado); exit;
      // return $request->all();
    }
}
