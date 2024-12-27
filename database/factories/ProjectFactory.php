<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => collect(fake()->words(5))->join(' '),
            "description" => fake()->randomHtml(),
            "ends_at" => fake()->dateTimeBetween('now', '+ 3 days'),
            "status" => fake()->randomElement(["open", "closed"]),
            "tech_stack" => json_encode(fake()->randomElements(["React", "Php", "Laravel", "Javascript", "Typescript", "Java", "Spring Boot"], random_int(1, 5))),
            "created_by" => User::factory(),
        ];
    }
}


// $table->id();

// $table->string('title');

// $table->text('description');

// $table->dateTime('ends_at');

// $table->string('status')->default('open');

// $table->json('tech_stack');

// $table->foreingIdFor(User::class, 'created_by')->constrained();

// $table->timestamps();
