<?php

namespace App\Exports;

use App\hotel;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class HotelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return hotel::all();
        
    }
}

?>
​