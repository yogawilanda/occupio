<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    /**
     * Display the product index view with paginated products.
     */
    public function index(): View
    {
        $products = DB::table('products')->paginate(5);

        return view('product.index', [
            'products' => $products,
        ]);
    }

    /**
     * Get the product list that must be foreached.
     */
    public function getProducts(): Collection
    {
        return DB::table('products')->get();
    }
}
