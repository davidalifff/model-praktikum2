<?php

namespace Database\Seeders;

use App\Models\Landing;
use Illuminate\Database\Seeder;

class landingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Landing::create([
            'desc' => 'Staycation and Spa',
        ]);
    }
}
