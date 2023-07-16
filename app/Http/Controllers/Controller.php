<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function errorResponse($msg,$data = [],$errCode = 1,$httpCode = 401)
    {
       return response()->json([
           "code" => $errCode,
           "err_msg" => $msg,
           "data" => $data
       ],$httpCode);
    }

    public function successResponse($data = []){
        return response()->json([
            "code" => 0,
            "data" => $data
        ]);
    }
}
