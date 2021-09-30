<?php

namespace App\Http\Controllers;


use App\Models\AdminEntrepriseAssurance;
use App\Models\AgentCommercial;
use App\Models\BrancheAssurance;
use App\Models\Client;
use App\Models\User;
use Database\Seeders\PermissionSeeder;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;


class ClientController extends Controller
{

    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware(['permission:SudoUser|AgentCommercial|AdminEntrepriseAssurance']);

    }

    public function alls()
    {

        $clients = Client::where('entreprise_assurance_id',
            auth()->user()->adminEntreprise->entreprise_assurance_id)->get();

        return view('clients.all',compact('clients'));
    }

    public function index()
    {

        //Pour recuperer que l'agent lié à un admin
        $clients = auth()->user()->agentCommercial->clients;
        return view('clients.index',compact('clients'));
    }

    public function create()
    {
        $permissions = Permission::where('name','=','Client')->get();
        $branches = BrancheAssurance::all();
        return view('clients.create',compact('permissions','branches'));
    }

    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name'=>'required|string',
            'rccm'=>'required|string',
            'assurance'=>'required|string',
            'adress'=>'required|string',
            'prime'=>'required|string',
            'secteur_activity'=>'required|string',
            'province'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg',
            'email'=>'required|string|email|unique:users,email',
            'password'=>'required|min:6',
            'permission_id'=>'required|exists:permissions,id',
            'branche_assurance_id'=>'required|exists:branche_assurances,id',
        ]);
        //Pour recuperer que l'entreprise  lié à un admin
        $agents = auth()->user()->agentCommercial;
        $entreprise = auth()->user()->agentCommercial->entrepriseAssurance->id;
        $filename = $this->move($request->file('image'));
        flash('Client  ajouté avec succès')->success();
        try {
            $data['agent_commercial_id'] = $agents['id'];
            $data['entreprise_assurance_id'] = $entreprise;
            $data['image'] = $filename;
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);
            $permission = Permission::find($data['permission_id']);
            $user->givePermissionTo($permission->name);
            $data['user_id'] = $user->id;
            $client = Client::create($data);
            return redirect()->route('clients.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit(Client $client)
    {
        //
        $client = Client::find($client->id);
        $clients = Client::all();
        $permissions = Permission::where('name','=','Client')->get();
        $branches = BrancheAssurance::all();
        return view('clients.edit',compact('client','clients','permissions','branches'));

    }

    public function update(Request $request, Client $client)
    {
        //
        $data = $request->validate([
            'name'=>'required|string',
            'rccm'=>'required|string',
            'assurance'=>'required|string',
            'adress'=>'required|string',
            'prime'=>'required|string',
            'province'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg',
            'email'=>'required|string|email|unique:users,email',
            'password'=>'required|min:6',
            'permission_id'=>'required|exists:permissions,id',
            'branche_assurance_id'=>'required|exists:branche_assurances,id',
        ]);

        $filename = $this->move($request->file('image'));
        $users = User::all();
        $data['image'] = $filename;
        $data['password'] = Hash::make($data['password']);
        $user = $users->find($client->user->id);
        $permission = Permission::find($data['permission_id']);
        $user->givePermissionTo($permission->name);
        $data['user_id'] = $user->id;
        $user->update($data);
        $client->update($data);
        try {
            return redirect()->route('clients.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(Client $client)
    {
        //
        $client->delete();
        flash('Client supprimé avec succès')->success();
        return redirect()->back();
    }

    private function move($image)
    {
        $originalImage = $image;
        $filename = time() . '-' . $originalImage->getClientOriginalName();
        $thumbnailImage = Image::make($originalImage);

        $lgPath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'Client' . DIRECTORY_SEPARATOR . 'lg' . DIRECTORY_SEPARATOR;
        $smPath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'Client' . DIRECTORY_SEPARATOR . 'sm' . DIRECTORY_SEPARATOR;
        $xsPath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'Client' . DIRECTORY_SEPARATOR . 'xs' . DIRECTORY_SEPARATOR;


        $thumbnailImage->resize(590, 590);
        $thumbnailImage->save($lgPath . $filename);
        $thumbnailImage->resize(90, 90);
        $thumbnailImage->save($smPath . $filename);
        $thumbnailImage->resize(45, 45);
        $thumbnailImage->save($xsPath . $filename);

        return $filename;
    }
}
