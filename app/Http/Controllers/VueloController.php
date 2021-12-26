<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vuelo;
use PDF;
use App\Exports\VueloExport;
use Excel;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vuelos = vuelo::all();

        return view('vuelo.index', compact('vuelos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vuelo.create');
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

        $vuelo = new vuelo;
        $vuelo->donde = $request->localizacion;
        $vuelo->registro = $request->registro;
        $vuelo->revisar = $request->revisar;
        $vuelo->invitado = $request->personas;
        $vuelo->save();

        if($request->idvuelo)
        {
            return redirect('index');
        } else {
            return redirect('vuelo');
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
        $vuelos = vuelo::find($id);

        return view('vuelo.edit', compact('vuelos'));
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
        $vuelo = vuelo::find($id);
        $vuelo->donde = $request->localizacion;
        $vuelo->registro = $request->registro;
        $vuelo->revisar = $request->revisar;
        $vuelo->invitado = $request->personas;
        $vuelo->save();

        return redirect('vuelo');
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
        
        vuelo::destroy($id);

        return redirect('vuelo');
    }

    public function pdf()
    {
        $vuelos = vuelo::all();
        $pdf = PDF::loadView('vuelo.pdf', compact('vuelos'));
        return $pdf->stream('reportevuelo.pdf');
    }

    public function excel(){
        return Excel::download(new VueloExport, 'vuelos.xls');
    }
}
