<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()
                ->count(7)
                ->sequence(
                    ['name' => 'Smartphones'],
                    ['name' => 'Laptops'],
                    ['name' => 'Tablets'],
                    ['name' => 'Desktops'],
                    ['name' => 'Gaming Consoles'],
                    ['name' => 'Wearables'],
                    ['name' => 'Accessories'],
                )
                ->create();

        Product::factory()
                ->count(12)
                ->sequence(
            [
                'name' => 'Apple iMac 27", 1TB HDD, Retina 5K Display, M3 Max',
                'description' => 'Apple iMac 27", 1TB HDD, Retina 5K Display, M3 Max',
                'image' => 'AppleiMac27p.png',
                'price' => 2499.99,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Apple iPhone 15 Pro Max, 256GB, Blue Titanium',
                'description' => 'Apple iPhone 15 Pro Max, 256GB, Blue Titanium',
                'image' => 'AppleiPhone15Pro.png',
                'price' => 1479.0,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'iPad Pro 13-Inch (M4): XDR Display, 512GB',
                'description' => 'iPad Pro 13-Inch (M4): XDR Display, 512GB',
                'image' => 'iPadPro13.png',
                'price' => 1097.0,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'PlayStation®5 Console – 1TB, PRO Controller',
                'description' => 'PlayStation®5 Console – 1TB, PRO Controller',
                'image' => 'PlayStation5.png',
                'price' => 749.0,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Apple MacBook PRO Laptop with M2 chip',
                'description' => 'Microsoft Xbox Series X 1TB Gaming Console',
                'image' => 'MicrosoftXboxSeriesX.png',
                'price' => 499.0,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Apple MacBook PRO Laptop with M2 chip',
                'description' => 'Apple MacBook PRO Laptop with M2 chip',
                'image' => 'AppleMacBookPRO.png',
                'price' => 1079.0,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Apple Watch SE [GPS 40mm], Smartwatch',
                'description' => 'Apple Watch SE [GPS 40mm], Smartwatch',
                'image' => 'AppleWatchSE.png',
                'price' => 699.0,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Microsoft Surface Pro, Copilot+ PC, 13 Inch',
                'description' => 'Microsoft Surface Pro, Copilot+ PC, 13 Inch',
                'image' => 'MicrosoftSurfacePro.png',
                'price' => 899.0,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Apple iPhone 15 Pro Max, 256GB, Blue Titanium',
                'description' => 'Apple iPhone 15 Pro Max, 256GB, Blue Titanium',
                'image' => 'AppleiPhone15Pro.png',
                'price' => 1479.0,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'PlayStation®5 Console – 1TB, PRO Controller',
                'description' => 'PlayStation®5 Console – 1TB, PRO Controller',
                'image' => 'PlayStation5.png',
                'price' => 749.0,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Apple MacBook PRO Laptop with M2 chip',
                'description' => 'Apple MacBook PRO Laptop with M2 chip',
                'image' => 'AppleMacBookPRO.png',
                'price' => 1079.0,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Apple Watch SE [GPS 40mm], Smartwatch',
                'description' => 'Apple Watch SE [GPS 40mm], Smartwatch',
                'image' => 'AppleWatchSE.png',
                'price' => 699.0,
                'category_id' => Category::inRandomOrder()->first()->id,
            ]
        )->create();
    }
}
