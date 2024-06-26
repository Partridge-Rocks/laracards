<?php

namespace PartridgeRocks\LaraCards\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PartridgeRocks\LaraCards\Models\Card;
use PartridgeRocks\LaraCards\Models\Suit;

class CardFactory extends Factory
{
    protected $model = Card::class;

    public function definition(): array
    {
        return [
            'rank' => 'A',
            'suit_id' => Suit::factory()->create(),
        ];
    }
}
