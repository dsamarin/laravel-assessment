<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = ['juice', 'vape', 'disposable', 'mod', 'tank'];
        $category = $this->faker->randomElement($categories);
        $categoryTitle = Str::title($category);

        return [
            'name' => $this->faker->company
                .' '.$this->faker->colorName.' '.$categoryTitle,
            'category' => $category,
            'price' => rand(1, 250) * 100 - 1,
            'image_src' => 'https://picsum.photos/seed/'.$this->faker->randomFloat.'/300',
        ];
    }
}
