<?php

namespace Database\Factories\merchant;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\merchant\M_Menu>
 */
class M_MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kategoriMakanan = ['Makanan', 'Snack', 'Minuman'];
        $kategori = $kategoriMakanan[array_rand($kategoriMakanan)];

        $gambarMakanan = 'Makanan.jpg';
        $gambarMinuman = 'Minuman.jpg';
        $gambarSnack = 'Snack.jpg';

        if ($kategori == 'Makanan') {
            $icon = $gambarMakanan;
        } elseif ($kategori == 'Minuman') {
            $icon = $gambarMinuman;
        } else {
            $icon = $gambarSnack;
        }
        return [
            'id' => $this->faker->uuid,
            'user_id' => User::where('role', 2)->inRandomOrder()->first()->id,
            'nama' => $this->faker->name,
            'kategori' => $kategori,
            'harga' => $this->faker->numberBetween(10000, 100000),
            // 'icon' => $this->faker->imageUrl(640, 480, 'food'),
            'icon' => $icon,
            'deskripsi' => $this->faker->text,
        ];
    }
}
