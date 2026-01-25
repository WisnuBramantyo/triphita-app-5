<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function show($id)
    {
        // Sample activity data - replace with actual database query
        $activity = (object) [
            'id' => $id,
            'title' => 'Sawah Kaiho Coffee',
            'location' => 'Bali, Indonesia',
            'rating' => 4.9,
            'review_count' => 2847,
            'duration' => 'Full Day (8 hours)',
            'group_size' => '2-12 people',
            'images' => [
                '/images/sawah-kaiho-4.jpg',
                '/images/sawah-kaiho-3.jpg',
                '/images/sawah-kaiho-2.jpg',
                '/images/sawah-kaiho-1.jpg',
                '/images/sawah-kaiho-5.jpg',
            ],
            'video_url' => 'https://youtube.com/shorts/SRqX_7M1MuU',
            'description' => "Immerse yourself in the ultimate tropical getaway at our exclusive Sunset Paradise Beach Resort. Nestled along the pristine shores of Bali's most secluded coastline, this experience offers an unparalleled blend of luxury, adventure, and natural beauty.\n\nBegin your journey with a traditional Balinese welcome ceremony, complete with fragrant flower garlands and refreshing coconut water. As you settle into the resort's world-class amenities, you'll discover why this hidden gem has become the destination of choice for discerning travelers from around the globe.\n\nThroughout the day, indulge in a curated selection of activities designed to rejuvenate your body and soul. From guided snorkeling expeditions through vibrant coral gardens to sunset yoga sessions on the beach, every moment is crafted to create lasting memories.\n\nAs the sun begins its descent, gather at our clifftop terrace for a spectacular sunset viewing accompanied by artisanal cocktails and gourmet canapés. The day concludes with an intimate beachfront dinner featuring the freshest local seafood and traditional Balinese delicacies.",
            'highlights' => [
                'Private beach access with luxury cabanas',
                'Traditional Balinese spa treatment',
                'Guided snorkeling in crystal-clear waters',
                'Sunset yoga and meditation session',
                'Gourmet beachfront dinner experience',
                'Professional photography session included',
            ],
            'facilities' => [
                ['name' => 'Free High-Speed WiFi', 'description' => 'Stay connected throughout your stay'],
                ['name' => 'Airport Transfer', 'description' => 'Complimentary pickup and drop-off'],
                ['name' => 'Gourmet Dining', 'description' => 'World-class cuisine with local flavors'],
                ['name' => 'Infinity Pool', 'description' => 'Ocean-view pool with swim-up bar'],
                ['name' => 'Private Beach', 'description' => 'Exclusive access to pristine shoreline'],
                ['name' => 'Photo Service', 'description' => 'Professional photography included'],
            ],
            'packages' => [
                [
                    'id' => 'essential',
                    'name' => 'Essential Experience',
                    'price' => 249,
                    'original_price' => 299,
                    'features' => [
                        'Beach access & cabana',
                        'Welcome ceremony',
                        'Snorkeling equipment',
                        'Lunch buffet',
                        'Sunset viewing',
                    ],
                    'popular' => false,
                ],
                [
                    'id' => 'premium',
                    'name' => 'Premium Escape',
                    'price' => 449,
                    'original_price' => 549,
                    'features' => [
                        'Everything in Essential',
                        '60-min spa treatment',
                        'Sunset yoga session',
                        'Beachfront dinner',
                        'Professional photos',
                        'Premium cocktails',
                    ],
                    'popular' => true,
                ],
                [
                    'id' => 'ultimate',
                    'name' => 'Ultimate Luxury',
                    'price' => 799,
                    'original_price' => 999,
                    'features' => [
                        'Everything in Premium',
                        'Private villa access',
                        'Personal butler service',
                        'Helicopter arrival',
                        'Exclusive chef\'s table',
                        'Luxury gift package',
                    ],
                    'popular' => false,
                ],
            ],
        ];

        return view('activity-detail', compact('activity'));
    }
}
