<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\CreateProductRequest;
use App\Models\Product;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function index(): View
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function store(CreateProductRequest $request)
    {
        Product::query()->create($request->validated());

        return redirect()->route('products.index');
    }
}
