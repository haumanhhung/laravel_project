<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(10),
            'content' =>$this->faker->sentence(500),
            'image1' => 'https://cdn.tgdd.vn/Files/2021/06/14/1360164/mi-11-lite-2_800x450.jpg',
            'image2' =>'https://cdn.tgdd.vn/Files/2021/06/14/1360164/mi-11-lite-2_800x450.jpg',
            'hot' => 1,
            'source' =>$this->faker->name,
            'category_id' => 1,
        ];
    }
}
