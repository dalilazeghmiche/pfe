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

    /** factory est utilisé pour tests  des donnees fictives
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return User::create([
            'email' => 'dalila@gmail.com',
            'fullName' => 'dalila zeghmiche',
            'password' => Hash::make('dalila2004'),
            'admin' => 1,
            'group_id' => $group->id
        ]);
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
