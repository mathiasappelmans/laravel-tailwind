<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // It is not a good practice to seed data in migration files.
        // It's better to use seeders for that purpose, like this 'php artisan migrate:fresh --seed --seeder=ProductSeeder --env=testing'
        // This is just for debug database insertions purposes only for development (test tables types and structure, index, foreign keys).
        /* $data =  array(
            [
                'name' => 'Smartphones',
            ],
            [
                'name' => 'Laptops',
            ],
            [
                'name' => 'Tablets',
            ],
            [
                'name' => 'Gaming Consoles',
            ],
        );
        foreach ($data as $datum){
            $category = new Category();
            $category->name =$datum['name'];
            $category->save();
        } */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
