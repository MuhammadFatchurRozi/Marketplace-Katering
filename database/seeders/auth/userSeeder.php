<?php

namespace Database\Seeders\auth;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create factory user merchant
        collect(range(1, 15))->map(function ($i) {
            return [
            'name' => Faker::create()->name,
            'email' => Faker::create()->unique()->safeEmail,
            'kontak' => Faker::create()->phoneNumber,
            'role' => 2,
            'alamat' => Faker::create()->address,
            'avatar' => Faker::create()->imageUrl($width = 640, $height = 480),
            'distance' => Faker::create()->numberBetween($min = 1, $max = 30),
            'password' => bcrypt('merchant123'),
            'password_confirmation' => bcrypt('merchant123'),
            ];
        })->each(function ($data) {
            User::create($data);
        });


        User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'kontak' => Faker::create()->phoneNumber,
            'alamat' => Faker::create()->address,
            'role' => 1,
            'avatar' => Faker::create()->imageUrl($width = 640, $height = 480),
            'password' => bcrypt('customer123'),
            'password_confirmation' => bcrypt('customer123'),
        ]);
    }
}
