<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alquila;
use PDF;
use App\Exports\AlquilerExport;
use Excel;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alquileres = alquila::all();

        return view('alquiler.index', compact('alquileres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alquiler.create');
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
        $alq = new alquila();
        $alq ->donde = $request->alquila;
        $alq ->fechadeinicio = $request->inicio;
        $alq ->fechaderegreso = $request->fin;
        $alq->save();
        
        if($request->idalquila)
        {
            return redirect('index');
        } else {
            return redirect('alquiler');
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
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alquiler = alquila::find($id);

        return view('alquiler.edit', compact('alquiler'));
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

        $alq = alquila::find($id);
        $alq ->donde = $request->alquila;
        $alq ->fechadeinicio = $request->inicio;
        $alq ->fechaderegreso = $request->fin;
        $alq->save();

        return redirect('alquiler');
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
        
        alquila::destroy($id);

        return redirect('alquiler');
    }

    public function pdf()
    {
        $alquileres = alquila::all();
        $pdf = PDF::loadView('alquiler.pdf', compact('alquileres'));
        return $pdf->stream('reportealquiler.pdf');
    }

    public function excel(){
        return Excel::download(new AlquilerExport, 'alquileres.xls');
    }

}
