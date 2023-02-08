<?php

namespace App\Repositories\Products;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepository
{

    /**
     * @return Collection<int, Product>
     */
    public function getAll(): Collection;
    public function add(array $payload): Product;

    public function update(int $productId, array $payload): Product;

    public function delete(int $productId): bool;
}
