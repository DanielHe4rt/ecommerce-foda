<?php

namespace App\Providers\Ecommerce;

use App\Repositories\ProductCategories\CategoryEloquentRepository;
use App\Repositories\ProductCategories\ProductCategoryRepository;
use App\Repositories\Products\ProductEloquentRepository;
use App\Repositories\Products\ProductRepository;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public array $bindings = [
        ProductRepository::class => ProductEloquentRepository::class,
        ProductCategoryRepository::class => CategoryEloquentRepository::class,
    ];
}
