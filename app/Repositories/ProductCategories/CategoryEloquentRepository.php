<?php

namespace App\Repositories\ProductCategories;

use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class CategoryEloquentRepository implements ProductCategoryRepository
{
    public function __construct(private readonly Category $model)
    {
    }

    public function getAll(): Collection
    {
        return $this->model->get();
    }

    public function paginate(int $rows = 10): LengthAwarePaginator
    {
        return $this->model->paginate($rows);
    }

    public function create(array $payload): Category
    {
        return $this->model->create($payload);
    }

    public function update(int $categoryId, array $payload): Category
    {
        $model = $this->model->find($categoryId);
        $model->update($payload);

        return $model->refresh();
    }

    public function delete(int $categoryId): bool
    {
        return $this->model->find($categoryId)->delete();
    }
}
