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
            'chat_id'=>$this->faker->numberBetween(1,10),
            'message'=>$this->faker->words(10,true),
            'user_id'=>$this->faker->numberBetween(1,10),
            'file_id'=>$this->faker->numberBetween(1,10),
            'view'=>$this->faker->numberBetween(0,1),
            'date'=>$this->faker->dateTime(),
        ];
    }
}
