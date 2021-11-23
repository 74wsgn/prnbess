<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use App\Models\Inverter;

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
        $data->gridvoltager = $request->gridVoltageR;
        $data->gridpowerr = $request->gridpowerR;
        $data->gridcurrr = $request->gridCurrR;
        $data->acoutvolr = $request->ACOutVolR;
        $data->acoutfreqr = $request->ACOutFreqR;
        $data->acoutcurrr = $request->ACOutCurrR;
        $data->outloadcurrr = $request->OUTLoadCurrR;
        $data->pbusvol = $request->PBusVol;
        $data->sbusvol = $request->SBusVol;
        $data->pbattvol = $request->PBattVol;
        $data->nbattvol = $request->NBattVol;
        $data->battlecap = $request->BattleCap;
        $data->pvinpow1 = $request->PVInPow1;
        $data->pvinpow2 = $request->PVInPow2;
        $data->pvinpow3 = $request->PVInPow3;
        $data->pvinvol1 = $request->PVInVol1;
        $data->pvinvol2 = $request->PVInVol2;
        $data->pvinvol3 = $request->PVInVol3;
        $data->vinvol3 = $request->VInVol3;
        $data->temp = $request->Temp;
        $data->devstatus = $request->DevStatus;
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
