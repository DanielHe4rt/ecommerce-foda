<?php
namespace Tests\Feature;
use App\Models\Customers\Customer;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CustomersControllerTest extends TestCase
{
    use DatabaseMigrations;
    public function testCanCreateCustomer(): void
    {
        $payload = [
            'name' => 'Daniel Corazon',
            'document_id' => '123.123.123-12',
            'phone_number' => '(11) 4002-9822',
        ];

        $response = $this->post(route('customers.store'), $payload);
        $customer = Customer::first();
        $response->assertRedirectToRoute('customers.edit', $customer);

        $this->assertDatabaseHas('customers', $payload);
    }

    public function testCanUpdateCustomer()
    {
        $customer = Customer::factory()->create();

        $payload = [
            'name' => 'Daniel Reis',
            'document_id' => '12312312312',
            'phone_number' => '12312312321'
        ];

        $response = $this->put(route('customers.update', $customer), $payload);
        $response->assertRedirectToRoute('customers.edit', $customer);

        $this->assertDatabaseHas('customers', [
            'id' => $customer->id,
            'name' => $payload['name']
        ]);
    }
}
