<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    //
    public function index()
    {
        $entreprises = Entreprise::query()->paginate(25);
        return view('entreprises.index',compact('entreprises'));
    }
}
