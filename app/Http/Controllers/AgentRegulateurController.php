<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use App\Models\AdminRegulateur;
use App\Models\AgentRegulateur;
use App\Models\RegulateurEntreprise;
use App\Models\User;
use Database\Seeders\PermissionSeeder;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;


class AgentRegulateurController extends Controller
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

    public function index()
    {

        //Pour recuperer que l'agent lié à un admin
        $admins = auth()->user()->adminRegulateur->agents;
       //$admins =  AdminRegulateur::with(['agents'])->get();
        //dd($admins);


        return view('agents_regulateurs.index',compact('admins'));
    }

    public function create()
    {
        $permissions = Permission::where('name','=','AgentRegulateur')->get();
        return view('agents_regulateurs.create',compact('permissions'));
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name'=>'required|string',
            'firstName'=>'required|string',
            'lastName'=>'required|string',
            'adress'=>'required|string',
            'phone'=>'required|string',
            'genre'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg',
            'email'=>'required|string|email|unique:users,email',
            'password'=>'required|min:6',
            'permission_id'=>'required|exists:permissions,id',
            /*'regulateur_entreprise_id'=>'required|exists:regulateur_entreprises,id',
            'admin_regulateur_id '=>'required|exists:admin_regulateurs,id',*/

        ]);
        //Pour recuperer que l'entreprise  lié à un admin
        $entreprises = auth()->user()->adminRegulateur->regulateurEntreprise;
        $admins = auth()->user()->adminRegulateur;
        $filename = $this->move($request->file('image'));
        flash('Agent ajouté avec succès')->success();
        try {
            $data['regulateur_entreprise_id'] = $entreprises->id;
            $data['admin_regulateur_id'] = $admins['id'];
            $data['image'] = $filename;
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);

            $permission = Permission::find($data['permission_id']);
            $user->givePermissionTo($permission->name);
            $data['user_id'] = $user->id;
            $admin = AgentRegulateur::create($data);
            return redirect()->route('agents_regulateurs.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit(AgentRegulateur $admin)
    {
        //
        $admin = AgentRegulateur::find($admin->id);
        $admins = AgentRegulateur::all();
        $permissions = Permission::where('name','=','AdminRegulateur')->get();
        $entreprises = RegulateurEntreprise::all();
        return view('admins_regulateurs.edit',compact('admins','admin','permissions','entreprises'));

    }

    public function update(Request $request, AgentRegulateur $admin)
    {
        //
        $data = $request->validate([
            'name'=>'required|string',
            'firstName'=>'required|string',
            'lastName'=>'required|string',
            'adress'=>'required|string',
            'phone'=>'required|string',
            'genre'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg',
            'email'=>'required|string|email|unique:users,email',
            'password'=>'required|min:6',
            'permission_id'=>'required|exists:permissions,id',
        ]);

        $filename = $this->move($request->file('image'));
        $users = User::all();
        $data['image'] = $filename;
        $data['password'] = Hash::make($data['password']);
        $user = $users->find($admin->user->id);
        $permission = Permission::find($data['permission_id']);
        $user->givePermissionTo($permission->name);
        $data['user_id'] = $user->id;
        $user->update($data);
        $admin->update($data);
        try {
            return redirect()->route('agents-regulateurs.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(AgentRegulateur $admin)
    {
        //
        $admin->delete();
        flash('Agent supprimé avec succès')->success();
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
