<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        $data = array(
            [
                'name' => 'Alanna Crooks',
                'email' => 'mark14@example.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'oCfUTSup20',
            ],
            [
                'name' => 'Abraham Huel',
                'email' => 'bartell.adolfo@example.net',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'XuBFrUC9Kg',
            ],
            [
                'name' => 'Arden Sanford',
                'email' => 'domenico.howell@example.net',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'ZXIuePaokt',
            ],
            [
                'name' => 'Alessandra Vandervort',
                'email' => 'hbednar@example.org',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'SSdRAeGOD1',
            ],
            [
                'name' => 'Alec Lehner II',
                'email' => 'juliet.white@example.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'b9JnTLMaA3',
            ],
            [
                'name' => 'Carolina Grady',
                'email' => 'wmedhurst@example.net',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'HWFVW3ggpw',
            ],
            [
                'name' => 'Mrs. Frida Feil',
                'email' => 'vbins@example.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '6uIqa4bHQ7',
            ],
            [
                'name' => 'Olin Jacobson',
                'email' => 'owuckert@example.org',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'p3w5TZfm0I',
            ],
            [
                'name' => 'Mathias Appelmans',
                'email' => 'math.appelmans@gmail.com',
                'password' => Hash::make("kaboum"),
                'remember_token' => '3XkhiKXqyf',
            ],
            [
                'name' => 'Coy Kuhlman',
                'email' => 'kasandra.veum@example.org',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'WZumOLoTVi',
            ]
        );
        foreach ($data as $datum){
            $category = new User();
            $category->name =$datum['name'];
            $category->email = $datum['email'];
            $category->password = $datum['password'];
            $category->remember_token = $datum['remember_token'];
            $category->save();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
