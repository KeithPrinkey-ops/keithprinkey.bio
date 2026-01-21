<?php

namespace Database\Factories;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ServicesFactory extends Factory
{
    protected $model = Services::class;

    public function definition(): array
    {
        $name = $this->faker->words(2, true);
        return [
            'name' => $this->faker->name(),
            'slug' => Str::slug($name),
            'description' => $this->faker->text(),
            'icon' => $this->faker->word(),
            'category' => $this->faker->word(),
            'features' => $this->faker->words(),
            'price_range' => $this->faker->word(),
            'active' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
