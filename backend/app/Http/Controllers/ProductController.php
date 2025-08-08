<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();
        if ($search = $request->get('q')) {
            $query->where('sku', 'like', "%$search%")
                  ->orWhere('name', 'like', "%$search%");
        }
        return $query->limit(50)->get();
    }
}
