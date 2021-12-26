<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\alquila;
use App\crucero;
use App\hotel;
use App\usuario;
use App\vuelo;

class IndexController extends Controller
{
    public function index()
    {
        $id_hotel = hotel::max('id');
        $id_hotel += 1;
        $id_vuelo = vuelo::max('id');
        $id_vuelo += 1;
        $id_alquila = alquila::max('id');
        $id_alquila += 1;
        $id_crucero = crucero::max('id');
        $id_crucero += 1;
        return view('home/index',['titulo' => 'Viajes Experenciales | Index'], compact('id_hotel','id_vuelo','id_alquila','id_crucero'));
    }
    public function indexadmin()
    {
        return view('indexadmin');
    }
     public function tours()
    {
        $next_id = vuelo::max('id');
        $next_id += 1;
        return view('home/tours',['titulo' => 'Viajes Experenciales | tours'], compact('next_id'));
    }
     public function hotels()
    {
        $next_id = hotel::max('id');
        $next_id += 1;
        return view('home/hotels',['titulo' => 'Viajes Experenciales | Hotels'], compact('next_id'));
    }
     public function services()
    {
        return view('home/services',['titulo' => 'Viajes Experenciales | Services']);
    }

     public function blog()
    {
        return view('home/blog',['titulo' => 'Viajes Experenciales | blog']);
    }

     public function about()
    {
        return view('home/about',['titulo' => 'Viajes Experenciales | Acerca de Nosostros']);
    }

     public function contact()
    {
        $next_id = Clientes::max('id');
        $next_id += 1;
        //return $next_id;
        return view('home/contact',['titulo' => 'Viajes Experenciales |  Contact'], compact('next_id'));
    }
     public function login()
    {
        $next_id = usuario::max('id');
        $next_id += 1;
        //return $next_id;
        return view('home/login',['titulo' => 'Viajes Experenciales |  login'], compact('next_id'));
    }

  
    
}
