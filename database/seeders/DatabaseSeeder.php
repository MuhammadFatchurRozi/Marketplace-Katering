<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Call the seeder class
use Database\Seeders\auth\userSeeder;

// Call the model class
use App\Models\User;
use App\Models\merchant\{
    M_Menu,
    M_Order,
};
use App\Models\customers\{
    C_Cart,
    C_Order,
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            userSeeder::class,
        ]);
        
        M_Menu::factory(50)->create();
        M_Order::factory(10)->create();
        C_Cart::factory(10)->create();
        // C_Order::factory(10)->create();
    }
}
