<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($num1, $num2) // calculator metohod
    {
        $result = $num1 + $num2;
        return view('calculator.sum',['pirms' => $num1, 'antrs'=> $num2, 'result'=>$result]);
    }
    public function subtract($num1, $num2)
    {
        $result = $num1 - $num2;
        return view('calculator.sum',['pirms' => $num1, 'antrs'=> $num2, 'result'=>$result]);
    }
    public function divide($num1, $num2)
    {
        $result = $num1 / $num2;
        return view('calculator.sum',['pirms' => $num1, 'antrs'=> $num2, 'result'=>$result]);
    }
    public function multiply($num1, $num2)
    {
        $result = $num1 * $num2;
        return view('calculator.sum',['pirms' => $num1, 'antrs'=> $num2, 'result'=>$result]);
    }
}
