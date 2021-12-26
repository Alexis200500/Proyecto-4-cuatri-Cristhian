<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use Session;
use PDF;
use App\Exports\UsuarioExport;
use Excel;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = usuario::all();

        return view('usuario.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;

        $usuario = new usuario;
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->password = $request->password;
        $usuario->save();

        if($request->id)
        {
            return redirect('indexadmin');
        } else {
            return redirect('usuario');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = usuario::find($id);

        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request;

        $usuario = usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->password = $request->password;
        $usuario->save();

        return redirect('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return $id;
        
        usuario::destroy($id);

        return redirect('usuario');
    }

    public function valida(Request $request)
    {
        $correo = $request->correo;
        $contrasena = $request->password;
  
         $this->validate($request,[
           'correo'=>'required|email',
           'password'=>'required',
            ]);
        $usuarios = usuario::where('correo',$correo)
                             ->where('password',$contrasena)
                             ->get();
        if (count($usuarios)==0 )
        {
           Session::flash('error', 'El usuario no existe o la contraseña
                                     no es correcta');
           return redirect('login');
        }
        else
        {
            return redirect('indexadmin');
        }
    }

    public function recoverpass()
    {
        return view('pass');
    }

    public function enviocorreo(Request $request)
    {
        //return $request;
        $usuario = usuario::where('correo',$request->correo)
        ->first();
        //return $usuario;

        \Mail::send('email', compact('usuario'), function($message) use ($usuario)
       {
           //remitente
           $message->from('al221811670@gmail.com', 'Viajes Con Experiencia');
 
           //asunto
           $message->subject('Recuperacion de Contraseña');
 
           //receptor
           $message->to($usuario->correo, $usuario->nombre);
 
       });

       return redirect('login');
    }

    public function recover($id)
    {
        return $id;

        $usuario = usuario::find($id);
        return view('recover', compact('usuario'));
    }

    public function password(Request $request, $id)
    {
        return $request;

        $usuario = usuario::find($id);
        $usuario->password = $request->password;
        $usuario->save();

        return redirect('login');
    }

    public function pdf()
    {
        $usuarios = usuario::all();
        $pdf = PDF::loadView('usuario.pdf', compact('usuarios'));
        return $pdf->stream('reporteusuario.pdf');
    }

    public function excel(){
        return Excel::download(new UsuarioExport, 'usuarios.xlsx');
    }

}
