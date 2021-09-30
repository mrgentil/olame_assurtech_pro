<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    //

    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware(['permission:Client|AdminEntrepriseAssurance']);
    }

    public function alls() {
        $devisAll = Devis::query()->paginate(15);
        $devisAllCount = Devis::all()->count();
        return view('devis.all',compact('devisAll','devisAllCount'));
    }

    public function index ()
    {
        $devis = auth()->user()->client->devis;
        return view('devis.index',compact('devis'));
    }

    public function create()
    {
        return view('devis.create');
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'assurance'=>'required|string',

        ]);
        flash('Demande devis effectuée avec succès')->success();
        try {
            $client = auth()->user()->client;
            $data['client_id'] = $client->id;
            $devis = Devis::create($data);
            return redirect()->route('devis.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
