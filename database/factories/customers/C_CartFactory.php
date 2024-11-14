<?php

namespace Database\Factories\customers;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\merchant\M_Menu;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customers\C_Cart>
 */
class C_CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'id' => $this->faker->uuid,
            'user_id' => User::where('role', 1)->inRandomOrder()->first()->id,
            'menu_id' => M_Menu::inRandomOrder()->first()->id,
            'quantity' => $this->faker->numberBetween(1, 10),
            'tanggal_order' => $this->faker->date,
        ];
    }
}
