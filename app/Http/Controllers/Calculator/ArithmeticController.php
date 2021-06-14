<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArithmeticController extends Controller
{
    public function calculating(string $operation, int $v1, int $v2){

        switch ($operation){
            case 'soma':
               $result = $v1 + $v2;
return view('calculator.sum',['valor1' =>$v1, 'valor2' => $v2, 'soma' =>$result]);
break;

case 'subtrai':
    $result = $v1 - $v2;
    return view('calculator.subtraction',['valor1' =>$v1, 'valor2' => $v2, 'subtrai' =>$result]);
    break;

        }
    }

public function sum(int $v1, int $v2){

$soma = $v1+$v2;

return view('calculator.sum',['valor1' =>$v1, 'valor2' => $v2, 'soma' =>$soma]);

}

public function subtraction(int $v1, int $v2){

    $subtrai = $v1 - $v2;
    
    return view('calculator.subtraction',['valor1' =>$v1, 'valor2' => $v2, 'subtrai' =>$subtrai]);
    
}
}