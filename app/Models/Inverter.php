<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inverter extends Model
{
    use HasFactory;
    protected $fillable = [
        'gridvoltageR',
        'gridpowerR',
        'gridfreqR',
        'gridCurrR',
        'ACOutVolR',
        'ACOutFreqR',
        'ACOutCurrR',
        'OutLoadPerc',
        'PBusVol',
        'SBusVol',
        'PBattVol',
        'NBattVol',
        'BattCap',
        'PVInPow1',
        'PVInPow2',
        'PVInPow3',
        'PVInVol1',
        'PVInVol2',
        'PVInVol3',
        'VInVol3',
        'Temp',
        'DevStatus',
    ];
}
