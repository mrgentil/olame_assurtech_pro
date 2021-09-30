<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    //
    public function index()
    {
        $abonnements = Abonnement::query()->paginate(20);
        return view('abonnements.index',compact('abonnements'));
    }
}
