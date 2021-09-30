<?php

namespace App\Http\Controllers;

use App\Models\RegulateurEntreprise;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;



class RegulateurEntrepriseController extends Controller
{

    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware(['permission:SudoUser']);

    }
    public function index()
    {
        $regulars = RegulateurEntreprise::query()->paginate(20);
        return view('regulateur_entreprises.index',compact('regulars'));
    }

    public function create()
    {
        return view('regulateur_entreprises.create');
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg',

        ]);

        $filename = $this->move($request->file('image'));
        flash('Regulateur ajouté avec succès')->success();
        try {
            $user = \Auth::user();
            $data['image'] = $filename;
            $data['user_id'] = $user->id;
            $regulars = RegulateurEntreprise::create($data);

            return redirect()->route('entreprise-regulateurs.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit(RegulateurEntreprise $regular)
    {
        //
        $regular = RegulateurEntreprise::find($regular->id);
        $regulars = RegulateurEntreprise::all();

        return view('regulateur_entreprises.edit',compact('regulars','regular'));

    }

    public function update(Request $request, RegulateurEntreprise $regular)
    {
        //
        $data = $request->validate([
            'name'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg',

        ]);

        $filename = $this->move($request->file('image'));
        $users = \Auth::user();
        $data['image'] = $filename;
        $user = $users->find($regular->user->id);
        $data['user_id'] = $user->id;
        $user->update($data);
        $regular->update($data);
        try {
            return redirect()->route('entreprise-regulateurs.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(RegulateurEntreprise $regular)
    {
        //
        $regular->delete();
        flash('Regaluteur supprimé avec succès')->success();
        return redirect()->back();
    }

    private function move($image)
    {
        $originalImage = $image;
        $filename = time() . '-' . $originalImage->getClientOriginalName();
        $thumbnailImage = Image::make($originalImage);

        $lgPath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'Regulateur' . DIRECTORY_SEPARATOR . 'lg' . DIRECTORY_SEPARATOR;
        $smPath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'Regulateur' . DIRECTORY_SEPARATOR . 'sm' . DIRECTORY_SEPARATOR;
        $xsPath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'Regulateur' . DIRECTORY_SEPARATOR . 'xs' . DIRECTORY_SEPARATOR;


        $thumbnailImage->resize(590, 590);
        $thumbnailImage->save($lgPath . $filename);
        $thumbnailImage->resize(90, 90);
        $thumbnailImage->save($smPath . $filename);
        $thumbnailImage->resize(45, 45);
        $thumbnailImage->save($xsPath . $filename);

        return $filename;
    }
}
