<?php

namespace App\Http\Controllers;

use App\Models\Assurance;
use Illuminate\Http\Request;

class AssuranceController extends Controller
{
    //
    public function index()
    {
        $assurances = Assurance::query()->paginate(20);
        return view('assurances.index',compact('assurances'));
    }
}
