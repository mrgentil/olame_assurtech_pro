<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Client;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminRegulateurPeriodeChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $souscripteursAllByYear = Client::query()
            ->select('*', 'created_at', DB::raw('YEAR(created_at) year'), 'created_at', DB::raw('MONTH(created_at) month'))
            ->orderByDesc('id')
            ->get()
            ->map(function ($client) {
                $client['month'] = $client->month;
                return $client;
            })
            ->groupBy('year');
        // dd($souscripteursAllByYear);

        $tab = [];
        foreach ($souscripteursAllByYear as $year => $clients) {
            //dd($year, $clients);
            $total = count($clients);
            $grouped = $clients->sortBy('created_at')->groupBy('month');
            foreach ($grouped as $month => $client) {
                $tab[$year][$month] = count($client) * 100 / $total;
            }
        }

        for($i = 0; $i <= count(array_keys($tab)); $i++){
            $jan[] = 0;
            $fev[] = 0;
            $mar[] = 0;
            $avril[] = 0;
            $mai[] = 0;
            $juin[] = 0;
            $juillet[] = 0;
            $aou[] = 0;
            $sep[] = 0;
            $oct[] = 0;
            $nov[] = 0;
            $dec[] = 0;
        }

        foreach (array_values($tab) as $monthTab => $value) {

            foreach ($value as $k => $v) {
                if ($k === 'Janvier') {
                    $jan[0] = $v;
                } elseif ($k === 'Février') {
                    $fev[1] = $v;
                } elseif ($k === 'Mars') {
                    $mar[2] = $v;
                } elseif ($k === 'Avril') {
                    $avril[3] = $v;
                } elseif ($k === 'Mai') {
                    $mai[4] = $v;
                } elseif ($k === 'Juin') {
                    $juin[5] = $v;
                } elseif ($k === 'Juillet') {
                    $juillet[6] = $v;
                } elseif ($k === 'Août') {
                    $aou[7] = $v;
                } elseif ($k === 'Septembre') {
                    $sep[8] = $v;
                } elseif ($k === 'Octobre') {
                    $oct[9] = $v;
                } elseif ($k === 'Novembre') {
                    $nov[10] = $v;
                } elseif ($k === 'Décembre') {
                    $dec[11] = $v;
                }
            }
        }

        return Chartisan::build()
            ->labels(array_keys($tab))
            ->dataset('Janvier', $jan)
            ->dataset('Fevrier', $fev)
            ->dataset('Mars', $mar)
            ->dataset('Avril', $avril)
            ->dataset('Mai', $mai)
            ->dataset('Juin', $juin)
            ->dataset('Juillet', $juillet)
            ->dataset('Août', $aou)
            ->dataset('Septembre', $sep)
            ->dataset('Octobre', $oct)
            ->dataset('Novembre', $nov)
            ->dataset('Décembre', $dec)
            ;
    }
}
