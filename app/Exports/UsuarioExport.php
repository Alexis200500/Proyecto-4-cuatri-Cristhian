<?php

namespace App\Exports;

use App\usuario;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsuarioExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return usuario::all();
        
    }
}

?>
​