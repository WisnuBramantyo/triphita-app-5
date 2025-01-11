<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    public function run()
    {
        Hotel::create([
            'name' => 'Ocean View Resort',
            'destination' => 'Hawaii',
            'price' => 200.00,
            'rooms' => 10,
            'available_from' => '2024-01-01',
            'available_to' => '2024-12-12',
        ]);

        Hotel::create([
            'name' => 'Mountain Lodge',
            'destination' => 'Aspen',
            'price' => 300.00,
            'rooms' => 5,
            'available_from' => '2024-01-01',
            'available_to' => '2024-12-12',
        ]);
    }
}
