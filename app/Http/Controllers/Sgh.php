<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sgh extends Controller
{
    public function index()
    {
        $respota = array(
            'status' => 'ok',
            'mensagem' => 'API SGH'
        );

        die(json_encode($respota));
    }
}
