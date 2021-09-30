<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'SudoUser']);
        Permission::create(['name' => 'AdminRegulateur']);
        Permission::create(['name' => 'AgentRegulateur']);
        Permission::create(['name' => 'AdminEntrepriseAssurance']);
        Permission::create(['name'=> 'Client']);
        Permission::create(['name'=> 'AgentCommercial']);

    }
}
