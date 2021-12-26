<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;

class loginController extends Controller {

		public function guardarusuario(Request $req) {
            $usu = new usuario();
            $usu -> idusuario = $req->get('idusuario');
            $usu -> nombre = $req->get('nombre');
            $usu -> correo = $req->get('correo');
            $usu -> password = $req->get('password');

            $usu->save();
            echo "ha sido guardado con exito";
            
        }
    }

		  









