<?php

namespace App\Exports;

use App\crucero;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class CruceroExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return crucero::all();
        
    }
}

?>
​