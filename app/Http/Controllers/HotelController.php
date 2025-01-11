<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function search(Request $request)
    {
        // Debugging: Check what inputs are being received
        // dd($request->all());
    
        // Your query logic continues here...
        $query = Hotel::query();

        if ($request->filled('hotel')) {
            $query->where('name', 'like', '%' . $request->hotel . '%');
        }
        if ($request->filled('duration')) {
            $query->where('duration', '>=', (int) $request->duration); // Using '>=' for matching longer tours
        }
        if ($request->filled('price')) {
            $query->where('price', '>=', (float) $request->price);
        }
        if ($request->filled('room')) {
            $query->where('room', '>=', (int) $request->rooms);
        }
    
        $hotels = $query->get();
    
        return view('hotel', compact('hotels'));

    }
}
