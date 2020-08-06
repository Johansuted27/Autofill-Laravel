<?php

namespace App\Imports;

use App\Bank;
use Maatwebsite\Excel\Concerns\ToModel;

class BankImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bank([
            'id' => $row[0],
            'name' => $row[1],
            'code' => $row[2]
        ]);
    }
}
