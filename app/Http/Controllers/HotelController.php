<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hotel;
use PDF;
use App\Exports\HotelExport;
use Excel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoteles = hotel::all();

        return view('hotel.index', compact('hoteles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.create');
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

        $hotel = new hotel;
        $hotel->registro = $request->registroh;
        $hotel->revisa = $request->revisarH;
        $hotel->invitado = $request->invitado;
        $hotel->save();

        if($request->idhotel)
        {
            return redirect('index');
        } else {
            return redirect('hotel');
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
        $hotel = hotel::find($id);

        return view('hotel.edit', compact('hotel'));
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
        $hotel = hotel::find($id);
        $hotel->registro = $request->registroh;
        $hotel->revisa = $request->revisarH;
        $hotel->invitado = $request->invitado;
        $hotel->save();

        return redirect('hotel');
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
        
        hotel::destroy($id);

        return redirect('hotel');
    }

    public function pdf()
    {
        $hoteles = hotel::all();
        $pdf = PDF::loadView('hotel.pdf', compact('hoteles'));
        return $pdf->stream('reportehotel.pdf');
    }

    public function excel(){
        return Excel::download(new HotelExport, 'hoteles.xls');
    }

}
