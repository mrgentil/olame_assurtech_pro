<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrancheAssuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('branche_assurances')->insert([
            ['name' => 'Branche vie'],
            ['name' => 'Branche non vie'],
        ]);
    }
}
