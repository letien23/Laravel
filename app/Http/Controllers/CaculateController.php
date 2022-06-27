<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculateController extends Controller
{
    //
    public function caculate(Request $req)
    {   
        $validated = $req->validate([
        'a' => 'required|numeric',
        'b' => 'required|numeric',
        'site' => 'required'
        ],
        [
            'a.required' => 'a bắt buộc nhập',
            'b.required' => 'b bắt buộc nhập',
            'a.numeric' => 'a phải là số nguyên',
            'b.numeric' => 'b phải là số nguyên',
            'site.required' => 'Nhập phép tính'
        ]);

        // $validator = Validator::make($req->all(), [
        //     'a' => 'required|numeric',
        //     'b' => 'required|numeric',
        // ],[
        //     'a.required' => 'a bắt buộc nhập',
        //     'b.required' => 'b bắt buộc nhập',
        //     'a.numeric' => 'a phải là số nguyên',
        //     'b.numeric' => 'b phải là số nguyên',
        // ]);
        // if($validator -> fails()){
        //     $errors = $validator -> errors();
        //     return view('ptbn')-> withErrors($errors);
        // }

        $a = $req -> input("a");
        $b = $req -> input("b");
        $site = $req -> input("site");
        
        switch ($site) {
            case "+":
                $result = $a."+".$b."=".($a + $b);
                break;
            case "-":
                $result =$a."-".$b."=".($a - $b);
                break;
            case "*":
                $result =$a."*".$b."=".($a * $b);
                break;
            case "/":
                if($b == 0){
                    $result = "B = 0 so undefined";
                } else{
                    $result =$a."/".$b."=".($a / $b);
                }
        }
        
        // if($s == "+"){
        //     $result = $a + $b;
        // } elseif($c == "-"){
        //     $result = $a - $b;
        // } else{
        //     $result = round(-$b/$a,2);
        // }
        return view('caculate',compact('site','a','b','result'));
    }
}
