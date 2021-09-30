<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Client;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class AdminRegulateurChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

       $souscripteursAllCount = Client::all()->count();
        $souscripteursAllById = Client::query()
            ->selectRaw('*, clients.name as client_name, clients.rccm as client_rccm')
            ->join('entreprise_assurances', 'entreprise_assurances.id', '=', 'clients.entreprise_assurance_id')
            ->get()
            ->groupBy('name')
        ;
        $tab = [];
        foreach ($souscripteursAllById as $k => $value){
            $tab[$k] = count($value) * 100 / $souscripteursAllCount;
        }

        return Chartisan::build()
            ->labels(array_keys($tab))
            ->dataset('Entreprise', array_values($tab)) ;
    }
}
