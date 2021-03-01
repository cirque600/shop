<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->word,
            'amount'      => $this->faker->randomNumber(3),
            'price'       => $this->faker->randomFloat(2, 100, 1000),
            'description' => $this->faker->sentence,
            'category_id' => Category::factory(),
            'image_url'   => $this->faker->image(null, 620, 480)
        ];
    }
}
