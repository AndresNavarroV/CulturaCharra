<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre' => $this->faker->name(), 
            'Nombre_mariachi' => $this->faker->word(), 
            'Núm_telefono' => $this->faker->numerify('33########'),
            'Email' => $this->faker->unique()->safeEmail(),
            'Ubicación_evento' => $this->faker->address(),
            'Fecha_hora' => $this->faker->dateTime(),
            'Encargado_evento' => $this->faker->name(),
            'Duración_evento' => $this->faker->numberBetween(1, 24),
            'Tamaño_equipo_solicitado' => $this->faker->randomElement(['chico', 'mediano', 'grande']),
            'Núm_violines' => $this->faker->numberBetween(1, 14),
            'Núm_trompetas' => $this->faker->numberBetween(1, 6),
            'Núm_guitarras' => $this->faker->numberBetween(1, 6),
            'Hay_vihuela' => $this->faker->boolean(),
            'Hay_Guitarrón' => $this->faker->boolean(),
            'Hay_Arpa' => $this->faker->boolean(),
            'Comentarios' => $this->faker->paragraph(),
        ];
    }
}
