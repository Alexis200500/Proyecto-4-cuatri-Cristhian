<?php

namespace App\Exports;

use App\vuelo;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class VueloExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return vuelo::all();
        
    }
}

?>
​