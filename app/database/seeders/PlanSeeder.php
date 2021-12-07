<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name' => 'Individual',
            'description' => 'Para uma pessoa',
            'entry' => 216,
            'dependent' => 1,
            'amount' => 36,
        ]);

        Plan::create([
            'name' => 'Família',
            'description' => 'Até 5 pessoas',
            'entry' => 455.4,
            'dependent' => 5,
            'amount' => 75.90,
        ]);
    }
}
