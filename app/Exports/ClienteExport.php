<?php

namespace App\Exports;

use App\Clientes;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class ClienteExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return Clientes::all();
        
    }
}

?>
​