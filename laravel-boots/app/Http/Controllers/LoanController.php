<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;


class LoanController extends Controller
{
    function saveLoan(Request $request){
        try {
            $loan = Loan::create([
                'money' =>  $request->money,
                'months' =>  $request->months,
                'frecuency' =>  $request->frecuency,
                'ced_type' =>  $request->cedType,
                'ced' =>  $request->ced,
                'tel' =>  $request->tel,
                'email' => $request->email 
            ]);
            return view('pages.message');
        }catch (\Throwable $th) {
            echo('controller'.$th);
        }
    }
    function index(){
        return view('pages.message');
    }
}
