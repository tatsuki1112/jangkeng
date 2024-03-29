<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;

class ResultsController extends Controller
{
    public function setResults(Request $request)
    {
//        var_dump($request);
//        console.log(var_dump($request));
//        $results = $request->input('trial');
//        Result::e

        $result = new Result();
        $result->trial =$request->trial;
        $result->gu =$request->gu;
        $result->choki =$request->choki;
        $result->pah =$request->pah;
        $result->aiko =$request->aiko;
        $result->cp1win=$request->cp1win;
        $result->cp2win =$request->cp2win;
        $result->save();


    }

    public function getResults(Request $request)
    {
        $totalTrial = Result::sum('trial');
        $totalGu = Result::sum('gu');
        $totalChoki = Result::sum('choki');
        $totalPah = Result::sum('pah');
        $totalMax = Result::max('trial');


        return view('total', compact('totalTrial','totalGu', 'totalChoki', 'totalPah', 'totalMax'));
    }

}
