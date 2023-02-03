<?php

namespace Tests\Feature;

use App\Enums\ProductCategoryEnum;
use App\Models\Category;
use App\Models\Product;
use Database\Seeders\CategorySeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class ProductsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function testCanIndex(): void
    {
        $product = Product::factory()->create();
        $response = $this->get(route('products.index'));

        $response->assertStatus(Response::HTTP_OK)
            ->assertSee($product->name);
    }


    public function testCanStore(): void
    {
        $this->seed(CategorySeeder::class);
        $payload = [
            'category_id' => ProductCategoryEnum::Sneakers->value,
            'name' => 'Air Jordan He4rt Edition',
            'price' => 100000,
            'stock' => 5
        ];

        $response = $this->postJson(route('products.store'), $payload);
        $response->assertRedirectToRoute('products.index');

        $this->assertDatabaseHas('products', $payload);
    }
}
