<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function search(Request $request)
    {
        $tours = Tour::query();

        // Filter by tour destination if provided
        if ($request->filled('destination')) {
            // $tours->where('destination', 'like', '%', $request->destination . '%');
            $tours->where('name', 'like', '%' . $request->destination . '%');
        }

        // Filter by available dates
        if ($request->filled('check_in') && $request->filled('check_out')) {
            $hotels->where('available_from', '<=', $request->check_in)
                   ->where('available_to', '>=', $request->check_out);
        }

         // Get the filtered tours
         $tours = $tours->get();

         // Pass the hotels to the view
        return view('welcome', compact('tours'));
    }
}
