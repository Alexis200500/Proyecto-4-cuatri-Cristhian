<?php

namespace App\Exports;

use App\alquila;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class AlquilerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return alquila::all();
        
    }
}

?>
​