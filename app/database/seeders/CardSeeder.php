<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::create([
            'holder' => 'Joao V S Vieira',
            'number' => '4111 1111 1111 1111',
            'expiry_month' => '01',
            'expiry_year' => '25',
            'cvv' => '123',
            'user_id' => 1
        ]);

        Card::create([
            'default' => 0,
            'holder' => 'Joao V S Vieira',
            'number' => '5353 2766 5962 9461',
            'expiry_month' => '02',
            'expiry_year' => '25',
            'cvv' => '123',
            'user_id' => 1
        ]);
    }
}
