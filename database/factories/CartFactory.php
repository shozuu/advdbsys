<?php
namespace Database\Factories;
use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    protected $model = Cart::class;

    public function definition()
    {
        return [
            'session_id' => $this->faker->uuid()
        ];
    }
}