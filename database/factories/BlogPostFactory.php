<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BlogPost;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(6);
        $text = $this->faker->text(rand(100, 4000));
        $isPublished = rand(1, 5) > 1;
        $createdAt = $this->faker->dateTimeBetween('-3 month', '-10 days');
        return [
            'category_id' => rand(1, 11),
            'user_id' => (rand(1, 5) == 5) ? 1 : 2,
            'title' => $title,
            'slug' => Str::slug($title),
            'except' => $this->faker->text(rand(40, 100)),
            'content_raw' => $text,
            'content_html' => $text,
            'is_published' => $isPublished,
            'published_at' => $isPublished ? $createdAt : null,
            'created_at' => $createdAt,
            'updated_at' => $createdAt,
        ];
    }
}
