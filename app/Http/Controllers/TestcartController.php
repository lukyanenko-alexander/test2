<?php

namespace App\Http\Controllers;

use App\Testcart;
use Illuminate\Http\Request;

class TestcartController extends Controller
{
    public function index(){

        $test = Testcart::find(1);

        if(\request()->expectsJson()){
            return response()->json($test->toArray());
        }

        return view('welcome', [
           'test' => $test,
        ]);
    }

    public function increase(Request $request){

        dd($request->price);

        $test = Testcart::find(1);

        $test -> update([
            'total' => $test->total +50
        ]);

        if(\request()->expectsJson()){
            return response()->json($test->toArray());
        }

        return view('welcome', [
            'test' => $test,
        ]);
    }
}
