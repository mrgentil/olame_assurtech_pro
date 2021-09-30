<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use App\Models\Client;
use App\Models\EntrepriseAssurance;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;



class EntrepriseAssuranceController extends Controller
{

    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware(['permission:SudoUser|AdminRegulateur']);
    }

    public function showEntreprise($id)
    {

        //ajut entre dans client
            $shows = Client::where('entreprise_assurance_id',$id)->get();
            return view('assurances.show',compact('shows'));
    }

    public function index()
    {
        $assurances = EntrepriseAssurance::query()->paginate(20);
        return view('assurances.index',compact('assurances'));
    }

    public function create()
    {
        $abonnements = Abonnement::where('name','=','Basic')->get();
        return view('assurances.create',compact('abonnements'));
    }
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name'=>'required|string',
            'rccm'=>'required|string',
            'adresse'=>'required|string',
            'abonnement_id'=>'required|exists:abonnements,id',
            'image'=>'required|image|mimes:jpeg,png,jpg',
        ]);

        $filename = $this->move($request->file('image'));
        flash('Entreprise ajoutée avec succès')->success();
        try {
            $user = auth()->user();
            $data['image'] = $filename;
            $data['user_id'] = $user->id;
            $assurances = EntrepriseAssurance::create($data);

            return redirect()->route('entreprise-assurances.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function edit(EntrepriseAssurance $entreprise)
    {
        //
        $entreprise = EntrepriseAssurance::find($entreprise->id);
        $entreprises = EntrepriseAssurance::all();

        return view('regulateur_entreprises.edit',compact('entreprise','entreprises'));
    }

    public function update(Request $request, EntrepriseAssurance $entreprise)
    {
        //
        $data = $request->validate([
            'name'=>'required|string',
            'rccm'=>'required|string',
            'adresse'=>'required|string',
            'abonnement_id'=>'required|exists:abonnements,id',
            'image'=>'required|image|mimes:jpeg,png,jpg',

        ]);

        $filename = $this->move($request->file('image'));
        $users = \Auth::user();
        $data['image'] = $filename;
        $user = $users->find($entreprise->user->id);
        $data['user_id'] = $user->id;
        $user->update($data);
        $entreprise->update($data);
        try {
            return redirect()->route('entreprise-regulateurs.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(EntrepriseAssurance $entreprise)
    {
        //
        $entreprise->delete();
        flash('Entreprise supprimée avec succès')->success();
        return redirect()->back();
    }

    private function move($image)
    {
        $originalImage = $image;
        $filename = time() . '-' . $originalImage->getClientOriginalName();
        $thumbnailImage = Image::make($originalImage);

        $lgPath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'Assurance' . DIRECTORY_SEPARATOR . 'lg' . DIRECTORY_SEPARATOR;
        $smPath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'Assurance' . DIRECTORY_SEPARATOR . 'sm' . DIRECTORY_SEPARATOR;
        $xsPath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'Assurance' . DIRECTORY_SEPARATOR . 'xs' . DIRECTORY_SEPARATOR;


        $thumbnailImage->resize(590, 590);
        $thumbnailImage->save($lgPath . $filename);
        $thumbnailImage->resize(90, 90);
        $thumbnailImage->save($smPath . $filename);
        $thumbnailImage->resize(45, 45);
        $thumbnailImage->save($xsPath . $filename);

        return $filename;
    }
}
