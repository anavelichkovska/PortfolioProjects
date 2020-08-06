<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return response()->json(['success' => 1, 'data' => $vehicles]);
    }

    public function get($id)
    {
        $vehicle = Vehicle::find($id);

        if($vehicle)
            return response()->json(['success' => 1, 'data' => $vehicle]);
        else
            return response()->json(['error' => 1, 'data' => "User not found"]);
    }

    public function store(Request $req)
    {
        $validator = \Validator::make($req->all(), [
            'brand' => 'required',
            'model' => 'required',
            'plate_number'=> 'required',
            'insurance_date'=> 'required'
        ]);

        if($validator->fails())
        {
            $array = [
                'error' => 1,
                'data'  => $validator->messages()
            ];

            return response()->json($array);
        } 

        $vehicle = new Vehicle();

        $vehicle->brand = $req->brand;
        $vehicle->model = $req->model;
        $vehicle->plate_number = $req->plate_number;
        $vehicle->insurance_date = $req->insurance_date;
        $vehicle->save();

        return response()->json(['success' => 1, 'data' => $vehicle]);
    }

    public function update(Request $req, $id)
    {
        $validator = \Validator::make($req->all(), [
            'brand' => 'required',
            'model' => 'required',
            'plate_number'=> 'required',
            'insurance_date'=> 'required'
        ]);

        if($validator->fails()){

            $array = [
                'error' => 1,
                'data'  => $validator->messages()
            ];
            return response()->json($array);
        }
        
        $vehicle = Vehicle::find($id);

        if($vehicle)
        {
            $vehicle->brand = $req->brand;
            $vehicle->model = $req->model;
            $vehicle->plate_number = $req->plate_number;
            $vehicle->insurance_date = $req->insurance_date;
            $vehicle->save();

            return response()->json(['success' => 1, 'data' => $vehicle]);

        } else {
            return response()->json(['error' => 1, 'data' => "User not found"]);
        }
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);

        if($vehicle){
            $vehicle->deleted_at = date("Y-m-d H:i:s");
            $vehicle->save();

            return response()->json(['success' => 1]);
        } else {
            return response()->json(['error' => 1, 'data' => "User not found"]);
        }
    }
}
