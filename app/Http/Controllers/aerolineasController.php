<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aerolineas;

class aerolineasController extends Controller {

    public function guardaraerolineas(Request $req) {
            $cli = new Aerolineas ();
            $cli -> aerolineas = $req->get('aerolineas');
            $cli -> nombrea = $req->get('nombrea');
            $cli -> vuelo = $req->get('vuelo');
            $cli -> precio = $req->get('precio');
           

            $cli->save();
            echo "ha sido guardado con exito";
            
        }
    }
