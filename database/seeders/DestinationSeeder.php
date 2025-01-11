<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;


class DestinationsSeeder extends Seeder
{
    public function run()
    {
        Destination::create([
            'name' => 'Surf lesson in Canggu – Bali',
            'duration' => 12,
            'price' => 400000,
            'adults' => 10,
            'children' => 10,
        ]);

        Destination::create([
            'name' => 'Buleleng and North Bali day tour',
            'duration' => 24,
            'price' => 1000000,
            'adults' => 20,
            'children' => 20,
        ]);

        Destination::create([
            'name' => 'North Bali short excursion',
            'duration' => 12,
            'price' => 500000,
            'adults' => 10,
            'children' => 10,
        ]);

        Destination::create([
            'name' => 'Shopping and Excursion in North Bali',
            'duration' => 24,
            'price' => 1200000,
            'adults' => 20,
            'children' => 20,
        ]);

        Destination::create([
            'name' => 'Day tour North Bali – Ulundanu temple, Tamblingan lake and Gitgit waterfall',
            'duration' => 12,
            'price' => 800000,
            'adults' => 10,
            'children' => 10,
        ]);

        

    }
}