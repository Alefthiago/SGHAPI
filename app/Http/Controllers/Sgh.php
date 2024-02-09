<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sgh extends Controller
{
    public function index()
    {
        $json_test = array(
            'name' => 'caraio'
        );
        die(json_encode($json_test));
    }
}
