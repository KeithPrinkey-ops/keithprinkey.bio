<?php

namespace Database\Factories;

use App\Models\Leads;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class LeadsFactory extends Factory
{
    protected $model = Leads::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'company' => $this->faker->company(),
            'project_type' => $this->faker->word(),
            'budget_range' => $this->faker->word(),
            'decision_timeline' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
