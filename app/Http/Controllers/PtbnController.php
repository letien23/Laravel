<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
 

class PtbnController extends Controller
{
    public function giai(Request $req)
    {   
        $validated = $req->validate([
        'a' => 'required|integer',
        'b' => 'required|integer',
        ],
        [
            'a.required' => 'a bắt buộc nhập',
            'b.required' => 'b bắt buộc nhập',
            'a.integer' => 'a phải là số nguyên',
            'b.integer' => 'b phải là số nguyên',
        ]);

        // $validator = Validator::make($req->all(), [
        //     'a' => 'required|integer',
        //     'b' => 'required|integer',
        // ],[
        //     'a.required' => 'a bắt buộc nhập',
        //     'b.required' => 'b bắt buộc nhập',
        //     'a.integer' => 'a phải là số nguyên',
        //     'b.integer' => 'b phải là số nguyên',
        // ]);
        // if($validator -> fails()){
        //     $errors = $validator -> errors();
        //     return view('ptbn')-> withErrors($errors);
        // }

        $a = $req -> input("a");
        $b = $req -> input("b");
        
        // if ($a =='' || $b ==''){
        //     $nghiem = '';
        // }
        if($a == 0 && $b== 0){
            $nghiem = "Vo so nghiem";
        } elseif($a == 0 && $b !=  0){
            $nghiem = "Vo nghiem";
        } else{
            $nghiem = round(-$b/$a,2);
        }
        return view('ptbn',compact('a','b','nghiem'));
    }
}
