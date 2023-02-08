<?php

namespace App\Repositories\Products;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductEloquentRepository implements ProductRepository
{
    public function __construct(private readonly Product $model)
    {
    }

    public function add(array $payload): Product
    {
        return $this->model->create($payload);
    }

    public function getAll(): Collection
    {
        return $this->model->get();
    }

    public function update(int $productId, array $payload): Product
    {
        $model = $this->model->find($productId);
        $model->update($payload);

        return $model->refresh();
    }

    public function delete(int $productId): bool
    {
        return $this->model->find($productId)->delete();
    }
}
