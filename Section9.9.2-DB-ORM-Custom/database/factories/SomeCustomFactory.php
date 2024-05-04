<?php

namespace Database\Factories;

use App\Models\MyCustomModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class SomeCustomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }

    protected $model = MyCustomModel::class;
}
