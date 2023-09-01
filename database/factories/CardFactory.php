<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $card_no = str_pad(random_int(1, 99999999), 8, '0', STR_PAD_LEFT);
        $card_no = substr_replace($card_no, '-', 4, 0);
        $user = User::inRandomOrder()->first();
        return [
            'card_no' => $card_no,
            'user_id' => $user->id,
        ];
    }
}
