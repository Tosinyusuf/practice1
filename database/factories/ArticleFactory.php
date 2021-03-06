<?php

namespace Database\Factories;

use App\Models\article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->text(30),
            'subtitle' =>$this->faker->text(90),
            'image' =>'image1.jpg',
            'link' =>$this->faker->text(10),
        ];
    }
}
