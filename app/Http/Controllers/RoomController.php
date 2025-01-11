<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Hotel;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function searchRoom(Request $request)
    {
        // Debugging: Check what inputs are being received
        // dd($request->all());
    
        // Your query logic continues here...
        $query = Rooms::query();

        if ($request->filled('id')) {
            $query->where('id', 'like', '%' . $request->id . '%');
        }
        if ($request->filled('room_type')) {
            $query->where('room_type', 'like', '%'. $request->room_type); // Using '>=' for matching longer tours
        }
        if ($request->filled('price')) {
            $query->where('price', '>=', (float) $request->price);
        }
        if ($request->filled('facilities')) {
            $query->where('facilities', '>=', $request->facilities);
        }
        if ($request->filled('link')) {
            $query->where('link', '>=', $request->link);
        }
    
        $detail = $query->get();
    
        return view('booking-detail', compact('detail'));
        // return Rooms::find($id);
    }
}
