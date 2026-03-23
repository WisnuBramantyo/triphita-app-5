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
                'title' => 'Vintage Volkswagen Tabanan Journey',
                'location' => 'Bali, Indonesia',
                'category' => 'Guided Tour, Workshop & Class, Adventure',
                'rating' => 4.9,
                'review_count' => 2847,
                'duration' => 'Full Day (8 hours)',
                'image' => '/images/sawah-kaiho-4.jpg',
                'price_from' => 500000,
                'price_original' => 800000,
                'booked_count' => 500,
                'badge' => 'Popular',
            ],
            [
                'id' => 2,
                'title' => '4WD Jeep Adventure in Pupuan, Tabanan',
                'location' => 'Bali, Indonesia',
                'category' => 'Guided Tour, Workshop & Class, Adventure',
                'rating' => 4.8,
                'review_count' => 1203,
                'duration' => 'Half Day (3 hours)',
                'image' => '/images/kkc-jeep-tour.jpg',
                'price_from' => 500000,
                'price_original' => 700000,
                'booked_count' => 320,
                'badge' => 'Best seller',
            ],
            [
                'id' => 3,
                'title' => 'Sustainable Food Waste Processing Experience',
                'location' => 'Bali, Indonesia',
                'category' => 'Guided Tour, Workshop & Class',
                'rating' => 4.7,
                'review_count' => 856,
                'duration' => '3–4 hours',
                'image' => '/images/kkc-sustainable-stays.jpg',
                'price_from' => 300000,
                'price_original' => 550000,
                'booked_count' => 180,
                'badge' => null,
            ],
            [
                'id' => 4,
                'title' => 'Conquer Sencond Highest and Bali’s Most Sacred Mountain',
                'location' => 'Bali, Indonesia',
                'category' => 'Guided Tour, Workshop & Class, Adventure',
                'rating' => 4.9,
                'review_count' => 442,
                'duration' => 'Full Day (8 hours)',
                'image' => '/images/kkc-welcome.jpg',
                'price_from' => 500000,
                'price_original' => 800000,
                'booked_count' => 210,
                'badge' => 'Eco choice',
            ],
        ])->map(function ($activity) {
            $original = $activity['price_original'] ?? $activity['price_from'] ?? 0;
            $current = $activity['price_from'] ?? 0;
            $activity['discount_percent'] = null;
            if ($original > 0 && $current < $original) {
                $activity['discount_percent'] = (int) round((1 - $current / $original) * 100);
            }
            return $activity;
        });
    }

    public function show($id)
    {
        $activity = $this->getActivityDetails()[(int) $id] ?? null;

        if (!$activity) {
            abort(404);
        }

        return view('activity-detail', ['activity' => (object) $activity]);
    }

    protected function getActivityDetails()
    {
        return [
            1 => [
                'id' => 1,
                'title' => 'Vintage Volkswagen Tabanan Journey',
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
                'description' => "Travel at a slower, more meaningful pace in a classic Volkswagen as you journey through Bali's landscapes and living traditions. This full day guided experience begins with an iconic visit to Tanah Lot, followed by immersive time in Darma Village to learn local life, rituals, and architecture.",
                'highlights' => [
                    'Scenic ride in a vintage Volkswagen with a local guide',
                    'Guided exploration of Tanah Lot and coastal stories',
                    'Darma Village walking tour and rice culture insights',
                    'Hands-on banten offering workshop and blessing ceremony',
                    'Gentle rice field trek and local lunch',
                ],
                'facilities' => [
                    ['name' => 'Vintage Volkswagen transportation', 'description' => 'Shared with up to 3 guests'],
                    ['name' => 'Professional local guide', 'description' => 'English speaking guide'],
                    ['name' => 'Coffee break', 'description' => 'Served in Darma Village'],
                    ['name' => 'Workshop materials', 'description' => 'For banten offering activity'],
                    ['name' => 'Lunch and bottled water', 'description' => 'Local menu'],
                ],
                'packages' => [
                    ['id' => 'adult', 'name' => 'Adult Package', 'price' => 700000, 'original_price' => 1000000, 'features' => [], 'popular' => false],
                    ['id' => 'children', 'name' => 'Children 5-12 Year', 'price' => 500000, 'original_price' => 800000, 'features' => [], 'popular' => true],
                ],
            ],
            2 => [
                'id' => 2,
                'title' => '4WD Jeep Adventure in Pupuan, Tabanan',
                'location' => 'Bali, Indonesia',
                'category' => 'Tours',
                'rating' => 4.8,
                'review_count' => 1203,
                'duration' => 'Half Day (3 hours)',
                'group_size' => '2 people',
                'images' => [
                    '/images/kkc-jeep-tour.jpg',
                    '/images/sawah-kaiho-1.jpg',
                    '/images/sawah-kaiho-2.jpg',
                    '/images/sawah-kaiho-3.jpg',
                ],
                'video_url' => 'https://youtube.com/shorts/SRqX_7M1MuU',
                'description' => "Explore Nature, Culture & Hidden Gems of West Bali. Experience the thrill of exploring Pupuan in a powerful 4WD jeep, designed to take you beyond the ordinary. This adventure combines light off-road excitement with authentic cultural encounters and breathtaking natural landscapes — a perfect escape from Bali’s crowded tourist zones.",
                'highlights' => [
                    '4WD jeep route through rural Pupuan',
                    'Photo stops at hill and rice terrace viewpoints',
                    'Local guide sharing stories of Tabanan villages',
                    'Light refreshments during the trip',
                ],
                'facilities' => [
                    ['name' => '4WD jeep transport', 'description' => 'Private jeep and local driver'],
                    ['name' => 'Guide support', 'description' => 'Route and safety briefing included'],
                    ['name' => 'Drinking water', 'description' => 'Bottled water provided'],
                ],
                'packages' => [
                    ['id' => 'adult', 'name' => 'Adult Package', 'price' => 500000, 'original_price' => 700000, 'features' => [], 'popular' => false],
                    ['id' => 'children', 'name' => 'Children 5-12 Year', 'price' => 500000, 'original_price' => 700000, 'features' => [], 'popular' => true],
                ],
            ],
            3 => [
                'id' => 3,
                'title' => 'Sustainable Food Waste Processing Experience',
                'location' => 'Bali, Indonesia',
                'category' => 'Tours',
                'rating' => 4.7,
                'review_count' => 856,
                'duration' => '3-4 hours',
                'group_size' => '5 people',
                'images' => [
                    '/images/kkc-sustainable-stays.jpg',
                    '/images/sawah-kaiho-2.jpg',
                    '/images/sawah-kaiho-1.jpg',
                ],
                'video_url' => 'https://youtube.com/shorts/SRqX_7M1MuU',
                'description' => "Curious about how food waste can be transformed into a valuable resource? This immersive 2-hour guided experience offers a meaningful introduction to sustainable waste management in a real working environment.Following the introduction, you will explore a modern food waste treatment facility, observing firsthand how organic waste is processed through sustainable methods. Your guide will explain each stage of the system, from waste collection to biological conversion, highlighting how nature-based solutions can support regenerative agriculture and responsible resource management. The experience begins with an engaging discussion on the challenges of food waste and the importance of circular solutions in modern sustainability practices. You will learn how innovative biological systems, including the use of black soldier flies, can efficiently convert organic waste into nutrient-rich compost and fertilizer while reducing environmental impact. The experience concludes with a hands-on activity where you will harvest larvae and collect nutrient-rich fertilizer derived from processed food waste. You will also receive a small sample of compost to take home, offering a tangible connection to the circular sustainability process and a deeper appreciation of how waste can be transformed into a beneficial resource.",
                'highlights' => [
                    'Introduction to sustainable food waste management and circular solutions',
                    'Learn about the ecological role of black soldier flies in waste conversion',
                    'Guided tour of a working food waste treatment facility',
                    'Observe real-life organic waste processing systems',
                    'Hands-on activity harvesting larvae and collecting organic fertilizer',
                    'Take-home sample of nutrient-rich compost',
                    'Educational and immersive sustainability experience suitable for all ages',
                ],
                'facilities' => [
                    ['name' => 'Professional guide and educational briefing', 'description' => 'Village-based host and interpreter'],
                    ['name' => 'Access to food waste treatment facility', 'description' => 'Tea or coffee included'],
                    ['name' => 'Hands-on workshop materials and equipment', 'description' => 'Tea or coffee included'],
                    ['name' => 'Take-home compost sample', 'description' => 'Tea or coffee included'],
                ],
                'packages' => [
                    ['id' => 'walk', 'name' => 'Walking Tour Package', 'price' => 300000, 'original_price' => 550000, 'features' => [], 'popular' => false],
                ],
            ],
            4 => [
                'id' => 4,
                'title' => 'Batukaru Mountain Hiking – Conquer  Sencond Highest and Bali’s Most Sacred Mountain',
                'location' => 'Bali, Indonesia',
                'category' => 'Experiences',
                'rating' => 4.9,
                'review_count' => 442,
                'duration' => 'Full Day',
                'group_size' => '2 people',
                'images' => [
                    '/images/kkc-welcome.jpg',
                    '/images/sawah-kaiho-5.jpg',
                    '/images/sawah-kaiho-3.jpg',
                ],
                'video_url' => 'https://youtube.com/shorts/SRqX_7M1MuU',
                'description' => "Escape the crowds and experience one of Bali’s most untouched and spiritual landscapes with a guided hike to Mount Batukaru, Bali’s second-highest volcano and one of its most sacred peaks. This is more than just a hike. It’s a journey into Bali’s deep rainforest, cool mountain air, and serene highland energy. Mount Batukaru Hiking offers a rewarding and adventurous trek through lush tropical forest, misty trails, and pristine natural surroundings. The terrain is challenging but well-managed, making it ideal for travelers seeking a more serious outdoor experience, without compromising safety.",
                'highlights' => [
                    'Available on request, this experience can be tailored to your preferred schedule and group size, ensuring a more exclusive and personalized journey.',
                    'Hike to the majestic Mount Batukaru, Bali’s second-highest and most sacred mountain, surrounded by untouched rainforest and mystical highland energy.',
                    'Feel the peaceful and sacred atmosphere of Bali’s highlands, at the highest Sacred Hindu\'s Temple in Bali, Pucak Kedaton Temple. A perfect escape for travelers seeking deeper connection with nature and Spirit.'
                ],
                'facilities' => [
                    ['name' => 'Private Experienced Tour Guide', 'description' => 'In-tour transportation included'],
                    ['name' => 'Free Entrance Ticket to The Village', 'description' => 'Facilitated by sustainability team'],
                ],
                'packages' => [
                    ['id' => 'adult', 'name' => 'Adult Package', 'price' => 500000, 'original_price' => 800000, 'features' => [], 'popular' => false],
                    ['id' => 'children', 'name' => 'Children 5-12 Year', 'price' => 500000, 'original_price' => 800000, 'features' => [], 'popular' => true],
                ],
            ],
            
        ];
    }
}
