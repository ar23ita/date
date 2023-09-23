<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

use Carbon\Carbon;

class DateTimePickerController extends Controller


{
    public function saveDate(Request $request)
    {
       
         return view('save-date-time-picker');
    }

    public function storeDate(Request $request)
    {
       
        $startDateTime = $request->input('start_date');
        $endDateTime = $request->input('end_date');
            $formattedStartDateTime = Carbon::createFromFormat('d/m/Y H:i:s', $startDateTime)->format('Y-m-d H:i:s');
            $formattedEndDateTime = Carbon::createFromFormat('d/m/Y H:i:s', $endDateTime)->format('Y-m-d H:i:s');
        DB::table('date_time_picker')->insert([
            'start_date' => $formattedStartDateTime,
            'end_date' => $formattedEndDateTime,
        ]);

    }
}




