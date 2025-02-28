<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Room::all()->map(function($room) {
            // Add multiple images for each room
            $room->images = [
                'images/rooms/' . $room->id . '/1.jpg',
                'images/rooms/' . $room->id . '/2.jpg',
                'images/rooms/' . $room->id . '/3.jpg',
                // Add more images as needed
            ];
            return $room;
        });

        return view('rooms', compact('rooms'));
    }
} 