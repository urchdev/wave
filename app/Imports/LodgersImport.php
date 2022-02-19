<?php

namespace App\Imports;

use App\Models\Lodger;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LodgersImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        /*if (!isset($row[0])) {
            return null;
        }*/
       // return print_r($row);
        //exit;
        return new Lodger([
            'vendor_id' => $row['vendor_id'],
            'trans_date' => $row['trans_date'],
            'guest_name' => $row['guest_name'],
            'guest_phone' => $row['guest_phone'],
            'guest_email' => $row['guest_email'],
            'check_in_date' => $row['check_in_date'],
            'check_out_date' => $row['check_out_date'],
            'arriving_from' => $row['arriving_from'],
            'departing_to' => $row['departing_to'],
        ]);
    }
}
