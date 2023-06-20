<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'district_id' => rand(1,5),
            'attribute1' => rand(1,5),
            'attribute2' => rand(1,5),
            'attribute3' => rand(1,5),
            'attribute4' => rand(1,5),
        ];

    }
}
