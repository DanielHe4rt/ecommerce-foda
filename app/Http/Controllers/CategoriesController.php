<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    public function index(): View
    {
        return view('categories.index', [
            'categories' => Category::query()->paginate()
        ]);
    }

    public function create(): View
    {
        return view('categories.create');
    }
}
