<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ProjectFactory extends Factory
{
    
    public function definition(): array
    {
        return [
           'titulo' => collect(fake()->words(5))->join(' '),
            'description' => fake()->randomHtml(),
            'ends_at' => fake()->datetimeBetween('now', '+ 3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => json_encode(array_values(fake()->randomElements(['Javascript', 'TypeScript', 'PHP', 'Laravel', 'ReactJs', 'NextJs', 'React Native', 'Mysql', 'PostgreSQL'], mt_rand(1, 5))), JSON_THROW_ON_ERROR),
            'created_by' => User::factory() ,
        ];
    }
}
