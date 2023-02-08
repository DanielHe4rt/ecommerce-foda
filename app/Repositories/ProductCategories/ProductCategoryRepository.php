<?php

namespace App\Repositories\ProductCategories;

use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface ProductCategoryRepository
{
    /**
     * @return Collection<int, Category>
     */
    public function getAll(): Collection;

    public function paginate(int $rows = 10): LengthAwarePaginator;

    public function create(array $payload): Category;

    public function update(int $categoryId, array $payload): Category;

    public function delete(int $categoryId): bool;
}
