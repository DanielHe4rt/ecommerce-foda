<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\ProductCategories\ProductCategoryRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    public function __construct(
        private readonly ProductCategoryRepository $productCategoryRepository
    )
    {
    }

    public function index(): View
    {
        return view('categories.index', [
            'categories' => $this->productCategoryRepository->paginate()
        ]);
    }

    public function create(): View
    {
        return view('categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->productCategoryRepository->create($request->all());

        return redirect()->route('categories.index');
    }

    public function edit(Category $category): View
    {
        return view('categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, int $category): RedirectResponse
    {
        $category = $this->productCategoryRepository->update($category, $request->all());
        return redirect()->route('categories.edit', $category);
    }

    public function delete(int $category): RedirectResponse
    {
        $this->productCategoryRepository->delete($category);

        return redirect()->route('categories.index');
    }
}
