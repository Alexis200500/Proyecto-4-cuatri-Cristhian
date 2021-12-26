<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use PDF;
use App\Exports\ClienteExport;
use Excel;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();

        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
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
        $cliente = new Clientes;
        $cliente->nombre = $request->nombre;
        $cliente->app = $request->app;
        $cliente->apm = $request->apm;
        $cliente->fn = $request->fn;
        $cliente->genero = $request->genero;
        $cliente->telefono = $request->telefono;
        $cliente->save();

        if($request->idcliente)
        {
            return redirect('index');
        } else {
            return redirect('cliente');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Clientes::find($id);

        return view('cliente.edit', compact('cliente'));
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

        $cliente = Clientes::find($id);
        $cliente->nombre = $request->nombre;
        $cliente->app = $request->app;
        $cliente->apm = $request->apm;
        $cliente->fn = $request->fn;
        $cliente->genero = $request->genero;
        $cliente->telefono = $request->telefono;
        $cliente->save();

        return redirect('cliente');
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
        
        Clientes::destroy($id);

        return redirect('cliente');

    }
    
    public function pdf()
    {
        $clientes = Clientes::all();
        $pdf = PDF::loadView('cliente.pdf', compact('clientes'));
        return $pdf->stream('reportecliente.pdf');
    }

    public function excel(){
        return Excel::download(new ClienteExport, 'clientes.xls');
    }
}
