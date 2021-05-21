<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function getResult(Request $request){
        $total = 0;
        if($request->operacao == '+')$total = ($request->primeiro + $request->segundo); else
        if($request->operacao == '-')$total = ($request->primeiro - $request->segundo); else
        if($request->operacao == '/')$total = ($request->primeiro / $request->segundo);else
        if($request->operacao == '*')$total = ($request->primeiro * $request->segundo); 


        return view('resultado', [
            'total' => $total,
            "primeiro" => $request->primeiro,
            "operacao" => $request->operacao,
            "segundo" => $request->segundo
        ]);
    }
}
