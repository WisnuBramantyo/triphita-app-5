<?php

use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\BookingController;

Route::post('/submit-booking', [BookingController::class, 'booking'])->name('submit-booking');
// Route::get('/submit-booking', function () {
//     return redirect()->back()->withErrors(['error' => 'This action is not supported.']);
// });


// Route::post('/submit-booking', [BookingController::class, 'booking'])->name('booking');

// Route::post('/booking',[BookingController::class, 'booking']);

Route::get('/payment', function () {
    return view('payment');
});


Route::get('/booking-detail', function () {
    return view('booking-detail');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', [DestinationController::class, 'search'])->name('search');
// Route::get('/search', [HotelController::class, 'search'])->name('search');

// Route::get('/', [HotelController::class, 'search'])->name('hotel.search');
// Route::get('/', [TourController::class, 'search'])->name('tour.search');
Route::get('/destination', [DestinationController::class, 'search'])->name('destination.search');
Route::get('/hotel', [HotelController::class, 'search'])->name('hotel.search');

Route::resource('tours', TourController::class);
Route::resource('hotels', HotelController::class);
Route::resource('hotels.rooms', RoomController::class);
Route::resource('bookings', BookingController::class);