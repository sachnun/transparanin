<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName(),
            'password' => bcrypt('123'),
            'avatar' => 'avatar.png',
            'nama_depan' => $this->faker->firstName(),
            'nama_belakang' => $this->faker->lastName(),
            'nik' => $this->faker->numerify('############'),
            'alamat' => $this->faker->address(),
            'rt' => '002',
            'rw' => '004',
            'kelurahan' => 'Cipare',
            'kecamatan' => 'Cipedes',
        ];
    }
}
