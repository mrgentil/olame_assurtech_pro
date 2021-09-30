<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Devis;
use App\Models\EntrepriseAssurance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use App\Charts\AdminRegulateurChart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     *
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $usersAllCount = null;
        $entreprisesAssuranceAllCount = null;
        $souscripteursAllCount = null;
        $agent_commercials = null;
        $souscripteursEntreprise = null;
        $primes = null;
        $agents_commercials = null;
        $souscripteursAll = null;
        $percentageSouscripteurAll = null;
        $showProvince = null;
        $recentSouscripteurs = null;
        $souscripteursAllById = null;


        if (auth()->user()->can('SudoUser')) {
            $usersAllCount = User::all()->count();
            $entreprisesAssuranceAllCount = EntrepriseAssurance::all()->count();
            $souscripteursAllCount = Client::all()->count();

        }

        if (auth()->user()->can('AdminRegulateur')) {

            $souscripteursAllCount = Client::all()->count();
           /* $souscripteursAllByYear = Client::query()
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
                    $tab[$year][$month] = [count($client) * 100 / $total, $year, $month];
                }
            }



            for ($i = 0; $i < count(array_keys($tab)); $i++) {
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
            /* $jan = [];
             $fev = [];
             $mar = [];
             $avril = [];
             $mai = [];
             $juin = [];
             $juillet = [];
             $aou= [];
             $sep= [] ;
             $oct= [] ;
             $nov= [] ;
             $dec= [] ;*/
            /*foreach ($tab as $monthTab => $value) {
                dd($tab, $monthTab, $value);
                for ($i = 0; $i < count(array_keys($tab)); $i++) {
                        if ($k === 'Janvier' && $v[1] === $monthTab) {
                            $jan[$i] = $v[0];
                        } elseif ($k === 'Février' && $v[1] === $monthTab) {
                            $fev[$i] = $v[0];
                        } elseif ($k === 'Mars' && $v[1] === $monthTab) {
                            $mar[$i] = $v[0];
                        } elseif ($k === 'Avril' && $v[1] === $monthTab) {
                            $avril[$i] = $v[0];
                        } elseif ($k === 'Mai' && $v[1] === $monthTab) {
                            $mai[$i] = $v[0];
                        } elseif ($k === 'Juin' && $v[1] === $monthTab) {
                            $juin[$i] = $v[0];
                        } elseif ($k === 'Juillet' && $v[1] === $monthTab) {
                            $juillet[$i] = $v[0];
                        } elseif ($k === 'Août' && $v[1] === $monthTab) {
                            $aou[$i] = $v[0];
                        } elseif ($k === 'Septembre' && $v[1] === $monthTab) {
                            $sep[$i] = $v[0];
                        } elseif ($k === 'Octobre' && $v[1] === $monthTab) {
                            $oct[$i] = $v[0];
                        } elseif ($k === 'Novembre' && $v[1] === $monthTab) {
                            $nov[$i] = $v[0];
                        } elseif ($k === 'Décembre' && $v[1] === $monthTab) {
                            $dec[$i] = $v[0];
                    }
                }
            }*/

            //dd($jan, $fev, $mar, $avril, $mai, $juin, $juillet, $aou, $sep, $oct, $nov, $dec);

            $entreprisesAssuranceAllCount = EntrepriseAssurance::all()->count();
            $souscripteursAll = Client::query()->paginate(15);
            $percentageSouscripteurAll = $souscripteursAllCount / 100;
            $charts = new AdminRegulateurChart();


        }

        if (auth()->user()->can('AdminEntrepriseAssurance')) {
            $agent_commercials = auth()->user()->adminEntreprise->agents->count();
        
            $souscripteursEntreprise = Client::where('entreprise_assurance_id',
                auth()->user()->adminEntreprise->entreprise_assurance_id)->count();
            $primes = Client::select('prime')->where('entreprise_assurance_id',
                auth()->user()->adminEntreprise->entreprise_assurance_id)->sum('prime');

            $showProvince = auth()->user()->adminEntreprise->agents;
            $recentSouscripteurs = Client::where('entreprise_assurance_id',
                auth()->user()->adminEntreprise->entreprise_assurance_id)->get();

        }

        if (auth()->user()->can('AgentCommercial')) {
            $agents_commercials = auth()->user()->agentCommercial->clients->count();
        }
        return view('layouts.index', compact(
            'usersAllCount',
            'entreprisesAssuranceAllCount',
            'souscripteursAllCount',
            'agent_commercials',
            'souscripteursEntreprise',
            'primes',
            'agents_commercials',
            'souscripteursAll',
            'percentageSouscripteurAll',
            'showProvince',
            'recentSouscripteurs',
            'souscripteursAllById'

        ));
    }


}
