<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Inverter;

class InverterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function addData(Request $request)
    {
        $data = new Inverter;
        $data->gridVoltageR = $request->gridVoltageR;
        $data->gridpowerR = $request->gridpowerR;
        $data->gridCurrR = $request->gridCurrR;
        $data->ACOutVolR = $request->ACOutVolR;
        $data->ACOutFreqR = $request->ACOutFreqR;
        $data->ACOutCurrR = $request->ACOutCurrR;
        $data->OUTLoadCurrR = $request->OUTLoadCurrR;
        $data->PBusVol = $request->PBusVol;
        $data->SBusVol = $request->SBusVol;
        $data->PBattVol = $request->PBattVol;
        $data->NBattVol = $request->NBattVol;
        $data->BattleCap = $request->BattleCap;
        $data->PVInPow1 = $request->PVInPow1;
        $data->PVInPow2 = $request->PVInPow2;
        $data->PVInPow3 = $request->PVInPow3;
        $data->PVInVol1 = $request->PVInVol1;
        $data->PVInVol2 = $request->PVInVol2;
        $data->PVInVol3 = $request->PVInVol3;
        $data->VInVol3 = $request->VInVol3;
        $data->Temp = $request->Temp;
        $data->DevStatus = $request->DevStatus;
        $data->save();
    
        return response()->json([
            "message" => "data record added"
        ], 201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
