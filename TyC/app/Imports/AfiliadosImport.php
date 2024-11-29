<?php

namespace App\Imports;

use App\Models\Afiliado;
use Maatwebsite\Excel\Concerns\ToModel;

class AfiliadosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Afiliado([
            //
        ]);
    }
}
