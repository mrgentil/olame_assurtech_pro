<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbonnementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('abonnements')->insert([
            ['name' => 'Basic'],
            ['name' => 'Classic'],
            ['name' => 'Premium'],
        ]);
    }
}
