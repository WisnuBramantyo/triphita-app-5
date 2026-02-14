<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(Request $request)
    {
        $activities = $this->getActivitiesList();

        $category = $request->get('category', 'all');
        if ($category !== 'all') {
            $activities = $activities->filter(fn ($a) => ($a['category'] ?? '') === $category);
        }

        $search = $request->get('q');
        if ($search) {
            $search = strtolower($search);
            $activities = $activities->filter(function ($a) use ($search) {
                return str_contains(strtolower($a['title'] ?? ''), $search)
                    || str_contains(strtolower($a['location'] ?? ''), $search);
            });
        }

        $sort = $request->get('sort', 'popular');
        $activities = match ($sort) {
            'price_low' => $activities->sortBy('price_from'),
            'price_high' => $activities->sortByDesc('price_from'),
            'rating' => $activities->sortByDesc('rating'),
            default => $activities->sortByDesc('booked_count'),
        };

        return view('activities', [
            'activities' => $activities->values(),
            'category' => $category,
            'sort' => $sort,
            'q' => $search,
        ]);
    }

    protected function getActivitiesList()
    {
        return collect([
            [
                'id' => 1,
                'title' => 'Vintage Volkswagen Journey, Tanah Lot & Darma Village Cultural Immersion',
                'location' => 'Bali, Indonesia',
                'category' => 'Experiences',
                'rating' => 4.9,
                'review_count' => 2847,
                'duration' => 'Full Day (8 hours)',
                'image' => '/images/sawah-kaiho-4.jpg',
                'price_from' => 500000,
                'price_original' => 800000,
                'discount_percent' => 17,
                'booked_count' => 500,
                'badge' => 'Popular',
            ],
            [
                'id' => 2,
                'title' => 'Volcanic Jeep Adventure',
                'location' => 'Bali, Indonesia',
                'category' => 'Tours',
                'rating' => 4.8,
                'review_count' => 1203,
                'duration' => 'Half Day (4 hours)',
                'image' => '/images/kkc-jeep-tour.jpg',
                'price_from' => 1350000,
                'price_original' => 1500000,
                'discount_percent' => 10,
                'booked_count' => 320,
                'badge' => 'Best seller',
            ],
            [
                'id' => 3,
                'title' => 'Heritage Village Walk',
                'location' => 'Bali, Indonesia',
                'category' => 'Tours',
                'rating' => 4.7,
                'review_count' => 856,
                'duration' => '3–4 hours',
                'image' => '/images/kkc-sustainable-stays.jpg',
                'price_from' => 675000,
                'price_original' => 675000,
                'discount_percent' => null,
                'booked_count' => 180,
                'badge' => null,
            ],
            [
                'id' => 4,
                'title' => 'Sustainable Stays & Farm Tour',
                'location' => 'Bali, Indonesia',
                'category' => 'Experiences',
                'rating' => 4.9,
                'review_count' => 442,
                'duration' => 'Full Day',
                'image' => '/images/kkc-welcome.jpg',
                'price_from' => 1800000,
                'price_original' => 2250000,
                'discount_percent' => 20,
                'booked_count' => 210,
                'badge' => 'Eco choice',
            ],
            [
                'id' => 5,
                'title' => 'Sunset Paradise Beach Resort',
                'location' => 'Bali, Indonesia',
                'category' => 'Experiences',
                'rating' => 4.8,
                'review_count' => 612,
                'duration' => 'Full Day (8 hours)',
                'image' => '/images/destination-1.jpg',
                'price_from' => 6750000,
                'price_original' => 8250000,
                'discount_percent' => 18,
                'booked_count' => 155,
                'badge' => 'Trending',
            ],
            [
                'id' => 6,
                'title' => 'Traditional Craft Workshop',
                'location' => 'Bali, Indonesia',
                'category' => 'Workshops',
                'rating' => 4.6,
                'review_count' => 328,
                'duration' => '2–3 hours',
                'image' => '/images/bg_1.jpg',
                'price_from' => 525000,
                'price_original' => 600000,
                'discount_percent' => 12,
                'booked_count' => 95,
                'badge' => null,
            ],
        ]);
    }

    public function show($id)
    {
        // Sample activity data - replace with actual database query
        $activity = (object) [
            'id' => $id,
            'title' => 'Vintage Volkswagen Journey, Tanah Lot & Darma Village Cultural Immersion',
            'location' => 'Bali, Indonesia',
            'category' => 'Experiences',
            'rating' => 4.9,
            'review_count' => 2847,
            'duration' => '8 hours (full day tour)',
            'group_size' => '2 - ∞ people',
            'images' => [
                '/images/sawah-kaiho-4.jpg',
                '/images/sawah-kaiho-3.jpg',
                '/images/sawah-kaiho-2.jpg',
                '/images/sawah-kaiho-1.jpg',
                '/images/sawah-kaiho-5.jpg',
            ],
            'video_url' => 'https://youtube.com/shorts/SRqX_7M1MuU',
            'description' => "Travel at a slower, more meaningful pace in a classic Volkswagen as you journey through Bali’s landscapes and living traditions. This full day guided experience begins with an iconic visit to Tanah Lot, where your guide shares the history, philosophy, and cultural significance of one of Bali’s most revered sea temples.\n\nFrom there, the journey continues to a Darma Village, a place where daily life, rituals, and architecture remain deeply rooted in tradition. Enjoy a relaxed coffee break before exploring the village on foot, learning how rice is traditionally processed, discovering village temples and their stories, and understanding the symbolism behind Balinese house architecture.\n\nYou will take part in a hands on banten offering workshop, followed by a simple blessing ceremony, before walking through rice fields that reflect Bali’s agrarian soul. The experience concludes with a locally prepared lunch, offering time to reflect and connect before returning.",
            'highlights' => [
                'Scenic ride in a vintage Volkswagen with a knowledgeable local guide',
                'Guided exploration of Tanah Lot, its history, rituals, and coastal setting',
                'Walking tour of Darma Village and insight into everyday village life',
                'Learn traditional rice processing methods and their cultural meaning',
                'Visit village temples and hear the stories behind them',
                'Discover Balinese house architecture and spatial philosophy',
                'Hands on banten offering workshop',
                'Traditional blessing ceremony',
                'Gentle rice field trekking through the village landscape',
                'Local lunch in a village setting'
            ],
            'facilities' => [
                ['name' => 'Vintage Volkswagen transportation (Shared with 3 people max)', 'description' => 'Stay connected throughout your stay'],
                ['name' => 'Professional local guide', 'description' => 'Complimentary pickup and drop-off'],
                ['name' => 'Coffee break in Darma Village', 'description' => 'World-class cuisine with local flavors'],
                ['name' => 'Workshop materials for banten making', 'description' => 'World-class cuisine with local flavors'],
                ['name' => 'Blessing ceremony arrangement', 'description' => 'World-class cuisine with local flavors'],
                ['name' => 'Lunch', 'description' => 'World-class cuisine with local flavors'],
                ['name' => 'Bottled drinking water', 'description' => 'World-class cuisine with local flavors'],
            ],
            'packages' => [
                [
                    'id' => 'essential',
                    'name' => 'Adult Package',
                    'price' => 700000,
                    'original_price' => 1000000,
                    'features' => [
                        // 'Beach access & cabana',
                        // 'Welcome ceremony',
                        // 'Snorkeling equipment',
                        // 'Lunch buffet',
                        // 'Sunset viewing',
                    ],
                    'popular' => false,
                ],
                [
                    'id' => 'premium',
                    'name' => 'Children 5-12 Year',
                    'price' => 500000,
                    'original_price' => 800000,
                    'features' => [
                        // 'Everything in Essential',
                        // '60-min spa treatment',
                        // 'Sunset yoga session',
                        // 'Beachfront dinner',
                        // 'Professional photos',
                        // 'Premium cocktails',
                    ],
                    'popular' => true,
                ],
            ],
        ];

        return view('activity-detail', compact('activity'));
    }
}
