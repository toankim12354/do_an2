<?php

namespace Database\Factories;

use App\Models\giao_vu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class giao_vuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = giao_vu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "ten" => $this->faker->name(),
            'birthday' => $this->faker->date('Y-m-d'),
            'email' => $this->faker->unique()->safeEmail(),
            'dia_chi' => $this->faker->streetAddress(),
            'gioi_tinh' => $this->faker->numberBetween(0, 1),
            'phone' => $this->faker->unique()->numerify('##########'),
            'password' => Hash::make('11111111'),
        ];
    }
}
