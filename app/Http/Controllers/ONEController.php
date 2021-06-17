<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\ONE;

class ONEController extends Controller
{
     public function signUp(Request $reg){
        $validate = Validator::make($reg->all(),
            [
                "name" => 'required',
                "surname" => 'required',
                "login" => 'required',
                "password" => 'required|min:6',
            ]);
        if($validate->fails())
        {
            return respons()->json(
                [
                    "message"=>$validate->errors(),
                ]
            );
        }
        ONE::create($reg->all());
        return respons()->json("norm");
    }
}
