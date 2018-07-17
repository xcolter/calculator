<?php

    namespace Xcolter\Calculator;

    use Illuminate\Http\Request;
    //use Illuminate\Support\Facades\Request;
    use App\Http\Controllers\Controller;

    class CalculatorController extends Controller
    {
        //
        public function add($a, $b){
            $result  = $a + $b;
            //return view('calculator::result')->with("result" =>  []);

        }

        public function subtract($a, $b){
           $data = array("result"  => $a - $b);
            return view('calculator::result')->with($data);
        }
    }