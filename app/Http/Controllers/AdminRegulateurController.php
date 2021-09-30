<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use App\Models\AdminRegulateur;
use App\Models\RegulateurEntreprise;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;


class AdminRegulateurController extends Controller
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
        //$admins = AdminRegulateur::where('regulateur_entreprise_id',auth()->user()->schoolAdmin->school->id)->get();
        $admins = AdminRegulateur::query()->paginate(20);
        return view('admins_regulateurs.index',compact('admins'));
    }

    public function create()
    {
        $permissions = Permission::where('name','=','AdminRegulateur')->get();
        $entreprises = RegulateurEntreprise::all();
        return view('admins_regulateurs.create',compact('permissions','entreprises'));
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
            'regulateur_entreprise_id'=>'required|exists:regulateur_entreprises,id',

        ]);

        $filename = $this->move($request->file('image'));
        flash('Administrateur ajouté avec succès')->success();
        try {
            $data['image'] = $filename;
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);

            $permission = Permission::find($data['permission_id']);
            $user->givePermissionTo($permission->name);
            $data['user_id'] = $user->id;
            $admin = AdminRegulateur::create($data);

            return redirect()->route('admin_regulateurs.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit(AdminRegulateur $admin)
    {
        //
        $admin = AdminRegulateur::find($admin->id);
        $admins = AdminRegulateur::all();
        $permissions = Permission::where('name','=','AdminRegulateur')->get();
        $entreprises = RegulateurEntreprise::all();
        return view('admins_regulateurs.edit',compact('admins','admin','permissions','entreprises'));

    }

    public function update(Request $request, AdminRegulateur $admin)
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
            'regulateur_entreprise_id'=>'required|exists:regulateur_entreprises,id',
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
            return redirect()->route('admins_regulateurs.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(AdminRegulateur $admin)
    {
        //
        $admin->delete();
        dd($admin);
        flash('Administrateur supprimé avec succès')->success();
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
