<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\CreateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Repositories\ProductCategories\ProductCategoryRepository;
use App\Repositories\Products\ProductRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function __construct(
        private readonly ProductRepository $productRepository,
        private readonly ProductCategoryRepository $productCategoryRepository
    )
    {
    }

    public function index(): View
    {
        return view('products.index', [
            'products' => $this->productRepository->getAll()
        ]);
    }

    public function create(): View
    {
        return view('products.create', [
            'categories' => $this->productCategoryRepository->getAll()
        ]);
    }

    public function store(CreateProductRequest $request): RedirectResponse
    {
        $this->productRepository->add($request->validated());

        return redirect()->route('products.index');
    }

    public function edit(Product $product): View
    {
        return view('products.edit', [
            'categories' => $this->productCategoryRepository->getAll(),
            'product' => $product
        ]);
    }

    public function update(Request $request, int $product): RedirectResponse
    {
        $product = $this->productRepository->update($product, $request->all());

        return redirect()->route('products.edit', $product)
            ->with('alert.success', 'Produto alterado com sucesso!');
    }

    public function destroy(int $product): RedirectResponse
    {
        $this->productRepository->delete($product);
        return redirect()->route('products.index');
    }
}
