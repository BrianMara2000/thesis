<?php

namespace App\Http\Controllers;

use App\Models\SensorData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SensorDataController extends Controller
{
    //
    public function show() {
        $sensorData = SensorData::all();
        return view('sensorData.sensor-data', [
            'sensors' => $sensorData
        ]);

    }

    public function storeData() {
        
    }
}
