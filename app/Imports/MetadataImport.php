<?php

namespace App\Imports;

use App\Models\Metadata;
use Maatwebsite\Excel\Concerns\ToModel;

class MetadataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Metadata([
            'entity_name' => $row[1],
            'entity_volume' => $row[2],
            'material' => $row[3],
        ]);
    }
}
