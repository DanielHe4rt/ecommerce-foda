<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\CreateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function index(): View
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function create(): View
    {
        return view('products.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(CreateProductRequest $request): RedirectResponse
    {
        Product::query()->create($request->validated());

        return redirect()->route('products.index');
    }

    public function edit(Product $product): View
    {
        return view('products.edit', [
            'categories' => Category::all(),
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $product->update($request->all());
        return redirect()->route('products.edit', $product);
    }

    public function delete(Product $product): RedirectResponse
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
