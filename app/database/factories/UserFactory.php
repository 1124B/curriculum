<?php

namespace Database\Factories;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = User::class;
    
    public function definition()
    {
        return [
            'nickname' => Str::random(15),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => $this->faker->password,
            'remember_token' => Str::random(10),
            'rol' => 1,
        ];
    }
}
// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'user_id' => User::factory(),
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'remember_token' => Str::random(10),
//         'rol' => 1,
//     ];
// });
// $factory->state(User::class, 'admin', [
//     'rol' => 0,
// ]);
// $factory->state(User::class, 'general', [
//     'rol' => 1,
// ]);
