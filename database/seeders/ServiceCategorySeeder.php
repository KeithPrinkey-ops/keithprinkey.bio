<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    public function run(): void
    {
        $names = [
            'Frontend Development',
            'Backend Development',
            'Full-Stack Development',
            'Web Design',
            'E-commerce Development',
            'API Development',
            'ServerOps',
            'NetworkOps',
            'VPS',
        ];

        foreach ($names as $name) {
            ServiceCategory::factory()->create([
                'name' => $name, // slug is omitted; model fill\(\) will set it from name
            ]);
        }
    }
}
