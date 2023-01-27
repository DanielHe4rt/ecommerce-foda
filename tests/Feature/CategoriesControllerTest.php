<?php
namespace Tests\Feature;
use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class CategoriesControllerTest extends TestCase
{
    use DatabaseMigrations;
    public function testCanListIndexPage(): void
    {
        $response = $this->get(route('categories.index'));

        $response->assertStatus(Response::HTTP_OK)
            ->assertJson(Category::all()->toArray());
    }
}
