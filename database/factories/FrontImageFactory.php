<?php

namespace Database\Factories;

use App\Models\FrontImage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class FrontImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FrontImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'id' =>Str::random(10),
            'title' =>$this->faker->text(30),
            'subtitle' =>$this->faker->text(90),
            'linktitle' =>$this->faker->text(10),
            'image' =>'image1.jpg',
            'link' => $this->faker->text(10),
        ];
    }
}
