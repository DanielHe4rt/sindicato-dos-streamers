<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $roles = ['streamer', 'viewer'];
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'twitch_id' => $this->faker->randomNumber(6),
            'twitch_username' => $this->faker->userName(),
            'twitch_created_at' => $this->faker->dateTimeBetween('-4 months'),
            'image' => 'https://static-cdn.jtvnw.net/jtv_user_pictures/c5170f4f-cf74-4f57-a182-f216bf7d0a21-profile_image-300x300.png',
            'role' => $roles[rand(0,1)],
            'terms' => true,
            'sent_message' => true,
            'signed_at' => $this->faker->dateTimeInInterval( '+5 minutes' ),
            'views' => $this->faker->randomNumber(6)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
