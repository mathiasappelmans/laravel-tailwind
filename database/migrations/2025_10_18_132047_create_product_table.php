<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('product')) {
            Schema::create('product', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->longText('description')->nullable();
                $table->string('image')->nullable();
                $table->decimal('price', 8, 2)->nullable();
                $table->unsignedBigInteger('category_id')->nullable();
                $table->foreign('category_id')->references('id')->on('category')->onDelete('set null');
                $table->timestamps();
            });
        }

        // It is not a good practice to seed data in migration files.
        // It's better to use seeders for that purpose, like this 'php artisan migrate:fresh --seed --seeder=ProductSeeder --env=testing'
        // This is just for debug database insertions purposes only for development (test tables types and structure).
        /* $data =  array(
            [
                'name' => 'Apple iMac 27", 1TB HDD, Retina 5K Display, M3 Max',
                'description' => 'Apple iMac 27", 1TB HDD, Retina 5K Display, M3 Max',
                'image' => 'AppleiMac27p.png',
                'price' => 2499.99,
                'category_id' => 3,
            ],
            [
                'name' => 'Apple iPhone 15 Pro Max, 256GB, Blue Titanium',
                'description' => 'Apple iPhone 15 Pro Max, 256GB, Blue Titanium',
                'image' => 'AppleiPhone15Pro.png',
                'price' => 1479.0,
                'category_id' => 1,
            ],
            [
                'name' => 'iPad Pro 13-Inch (M4): XDR Display, 512GB',
                'description' => 'iPad Pro 13-Inch (M4): XDR Display, 512GB',
                'image' => 'iPadPro13.png',
                'price' => 1097.0,
                'category_id' => 3,
            ],
            [
                'name' => 'PlayStation®5 Console – 1TB, PRO Controller',
                'description' => 'PlayStation®5 Console – 1TB, PRO Controller',
                'image' => 'PlayStation5.png',
                'price' => 749.0,
                'category_id' => 4,
            ],
            [
                'name' => 'Apple MacBook PRO Laptop with M2 chip',
                'description' => 'Microsoft Xbox Series X 1TB Gaming Console',
                'image' => 'MicrosoftXboxSeriesX.png',
                'price' => 499.0,
                'category_id' => 2,
            ],
            [
                'name' => 'Apple MacBook PRO Laptop with M2 chip',
                'description' => 'Apple MacBook PRO Laptop with M2 chip',
                'image' => 'AppleMacBookPRO.png',
                'price' => 1079.0,
                'category_id' => 2,
            ],
            [
                'name' => 'Apple Watch SE [GPS 40mm], Smartwatch',
                'description' => 'Apple Watch SE [GPS 40mm], Smartwatch',
                'image' => 'AppleWatchSE.png',
                'price' => 699.0,
                'category_id' => 1,
            ],
            [
                'name' => 'Microsoft Surface Pro, Copilot+ PC, 13 Inch',
                'description' => 'Microsoft Surface Pro, Copilot+ PC, 13 Inch',
                'image' => 'MicrosoftSurfacePro.png',
                'price' => 899.0,
                'category_id' => 2,
            ],
            [
                'name' => 'Apple iPhone 15 Pro Max, 256GB, Blue Titanium',
                'description' => 'Apple iPhone 15 Pro Max, 256GB, Blue Titanium',
                'image' => 'AppleiPhone15Pro.png',
                'price' => 1479.0,
                'category_id' => 1,
            ],
            [
                'name' => 'PlayStation®5 Console – 1TB, PRO Controller',
                'description' => 'PlayStation®5 Console – 1TB, PRO Controller',
                'image' => 'PlayStation5.png',
                'price' => 749.0,
                'category_id' => 4,
            ],
            [
                'name' => 'Apple MacBook PRO Laptop with M2 chip',
                'description' => 'Apple MacBook PRO Laptop with M2 chip',
                'image' => 'AppleMacBookPRO.png',
                'price' => 1079.0,
                'category_id' => 2,
            ],
            [
                'name' => 'Apple Watch SE [GPS 40mm], Smartwatch',
                'description' => 'Apple Watch SE [GPS 40mm], Smartwatch',
                'image' => 'AppleWatchSE.png',
                'price' => 699.0,
                'category_id' => 1,
            ],
        );
        foreach ($data as $datum){
            $category = new Product();
            $category->name =$datum['name'];
            $category->description = $datum['description'];
            $category->image = $datum['image'];
            $category->price = $datum['price'];
            $category->category_id = $datum['category_id'];
            $category->save();
        }
 */
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
