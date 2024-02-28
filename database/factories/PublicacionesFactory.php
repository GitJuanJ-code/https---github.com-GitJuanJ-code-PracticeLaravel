<?php

namespace Database\Factories;

use App\Models\Publicaciones;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publicaciones>
 */
class PublicacionesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Publicaciones::class;

    /**
     * Define the model's default state.
     * 
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['Desarrollo Web', 'Diseño Web'])
        ];
    }
}
