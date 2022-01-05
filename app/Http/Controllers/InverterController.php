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
        $data->gridfreqr = $request->gridFreqR;
        $data->gridcurrr = $request->gridCurrR;
        $data->acoutvolr = $request->ACOutVolR;
        $data->acoutpowr = $request->ACOutPowR;
        $data->acoutfreqr = $request->ACOutFreqR;
        $data->acoutcurrr = $request->ACOutCurrR;
        $data->outloadperc = $request->OUTLoadPerc;
        $data->pbusvol = $request->PBusVol;
        $data->sbusvol = $request->SBusVol;
        $data->pbattvol = $request->PBattVol;
        $data->nbattvol = $request->NBattVol;
        $data->battcap = $request->BattCap;
        $data->pvinpow1 = $request->PVInPow1;
        $data->pvinpow2 = $request->PVInPow2;
        $data->pvinpow3 = $request->PVInPow3;
        $data->pvinvol1 = $request->PVInVol1;
        $data->pvinvol2 = $request->PVInVol2;
        $data->pvinvol3 = $request->PVInVol3;
        $data->temp = $request->Temp;
        $data->devstatus = $request->DevStatus;
        $data->save();
    
        return response()->json([
            "message" => "data record added"
        ], 201);
    }
    public function getData()
    {
        //$mm = strtotime(date("F"));
        //$month = (int)date("m", $mm);
        //$data1 = Inverter::latest()->take(30)->get();
        //$sum = Inverter::where('gridvoltager',$gridvoltager)->whereMonth('created_at', $month)->pluck('gridvoltager')->sum()->avg();
        //$labels = $data1 ->pluck('created_at');
        //$data = $data1 ->pluck('gridvoltager');
        //return response()->json(compact('labels', 'data'));

        $data1 = Inverter::latest()->take(5)->get();
        $labels = $data1 ->pluck('created_at');
        $datagp = $data1 ->pluck('gridpowerr');
        $datalp = $data1 ->pluck('acoutpowr');
        $databp = $data1 ->pluck('battcap');
        $datapvp = $data1 ->pluck('pvinpow1');
        return response()->json(compact('labels', 'datagp', 'datalp', 'databp', 'datapvp'));
    }
    /*public function getData2()
    {
        $data2 = Inverter::latest()->take(30)->get();
        $labels2 = $data2 ->pluck('created_at');
        $dataa = $data2 ->pluck('pvinpow1');
        return response()->json(compact('labels2', 'dataa'));
    }*/
    public function getDataGraph()
    {
        $mm = strtotime(date("F"));
        $month = (int)date("m", $mm);
        $sum = Inverter::where('gridpowerr',$gridpowerr)->whereMonth('created_at', $month)->pluck('gridpowerr')->sum()->avg();
        $data1 = Inverter::latest()->get()->chunk(7);
        $chunk = $data1[0];
        $pwr = $chunk->pluck('gridpowerr');
        return ['sum'=>$sum];
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
