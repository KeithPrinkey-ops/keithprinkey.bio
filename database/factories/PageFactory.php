<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'subtitle' => $this->faker->word(),
            'summary' => $this->faker->text(),
            'meta_description' => $this->faker->text(),
            'og_image_path' => $this->faker->word(),
            'route_name' => $this->faker->name(),
            'external_url' => $this->faker->url(),
            'tech_stack' => $this->faker->words(),
            'features' => $this->faker->words(),
            'screenshots' => $this->faker->words(),
            'faqs' => $this->faker->words(),
            'order_column' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
