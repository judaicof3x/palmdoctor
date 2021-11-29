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
            'description' => 'Plano individual para não parceiros',
            'amount' => 36,
        ]);

        Plan::create([
            'name' => 'Família',
            'description' => 'Plano família para não parceiros',
            'amount' => 75.90,
        ]);
    }
}
