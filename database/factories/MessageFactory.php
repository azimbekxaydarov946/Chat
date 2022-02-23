<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Chat>
 */
class MessageFactory extends Factory
{
    protected $model = Message::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'message'=>$this->faker->words(10,true),
            'file'=>$this->faker->url(),
            'chat_id'=>$this->faker->numberBetween(1,10),
            'auth_id'=>$this->faker->unique()->numberBetween(1,10)
        ];
    }
}
