<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherCodeController extends Controller
{
    public function generateCode($length = 12){
        $chars='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $total_chars = strlen($chars);
        $total_repeat = ceil($length/$total_chars);
        $repeat_string = str_repeat($chars, $total_repeat);
        $shuffle_string = str_shuffle($repeat_string);
        return substr($shuffle_string,1,$length);
    }
}
