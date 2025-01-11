<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    public function run()
    {
        Tour::create([
            'name' => 'Surf lesson in Canggu – Bali',
            'duration' => 2,
            'available_from' => '2024-01-01',
            'available_to' => '2024-12-12',
            'adults' => 10,
            'children' => 10,
        ]);

        Tour::create([
            'name' => 'Buleleng and North Bali day tour',
            'duration' => 10,
            'available_from' => '2024-01-01',
            'available_to' => '2024-12-12',
            'adults' => 10,
            'children' => 10,
        ]);


        Tour::create([
            'name' => 'North Bali short excursion',
            'duration' => 8,
            'available_from' => '2024-01-01',
            'available_to' => '2024-12-12',
            'adults' => 10,
            'children' => 10,
        ]);

        Tour::create([
            'name' => 'North Bali excursion and shopping',
            'duration' => 8,
            'available_from' => '2024-01-01',
            'available_to' => '2024-12-12',
            'adults' => 10,
            'children' => 10,
        ]);

        Tour::create([
            'name' => 'Day tour North Bali – Ulundanu temple, Tamblingan lake and Gitgit waterfall',
            'duration' => 8,
            'available_from' => '2024-01-01',
            'available_to' => '2024-12-12',
            'adults' => 5,
            'children' => 5,
        ]);

        
    }
}
