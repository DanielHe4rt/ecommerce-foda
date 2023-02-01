<?php

namespace Database\Factories\Customers;

use App\Models\Customers\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{

    protected $model = Customer::class;

    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid(),
            'name' => $this->faker->name(),
            'phone_number' => $this->faker->phoneNumber(),
            'document_id' => $this->faker->randomNumber(5)
        ];
    }
}
