<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Sistema extends Controller
{
    public function Interfaz(){
        return view("Sistema.Interfaz.Interfaz");
    }
}
