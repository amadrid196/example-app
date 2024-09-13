<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class frmRegistroCtrl extends Controller
{
    public function mostrarDatos(){
        return view('registro.frmRegistro');
    }
}
