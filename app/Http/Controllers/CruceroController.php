<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\crucero;
use PDF;
use App\Exports\CruceroExport;
use Excel;

class CruceroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruceros = crucero::all();

        return view('crucero.index', compact('cruceros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crucero.create');
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

        $crucero = new crucero;
        $crucero->donde = $request->crucero;
        $crucero->fechadeinicio = $request->fecha;
        $crucero->categorias = $request->categoria;
        $crucero->save();

        if($request->idcrucero)
        {
            return redirect('index');
        } else {
            return redirect('crucero');
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
        $crucero = crucero::find($id);

        return view('crucero.edit', compact('crucero'));
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
        $crucero = crucero::find($id);
        $crucero->donde = $request->crucero;
        $crucero->fechadeinicio = $request->fecha;
        $crucero->categorias = $request->categoria;
        $crucero->save();

        return redirect('crucero');
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
        
        crucero::destroy($id);

        return redirect('crucero');
    }
    
    public function pdf()
    {
        $cruceros = crucero::all();
        $pdf = PDF::loadView('crucero.pdf', compact('cruceros'));
        return $pdf->stream('reportecrucero.pdf');
    }

    public function excel(){
        return Excel::download(new CruceroExport, 'cruceros.xls');
    }
}
