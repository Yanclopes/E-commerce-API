<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductsController extends Controller
{
    public function getAll($id = 15): ProductResource
    {
        return new ProductResource(Product::paginate($id));
    }

    public function find($id): ProductResource
    {
        return new ProductResource(Product::findOrFail($id));
    }

    public function create(ProductRequest $request): JsonResponse
    {
        $product = Product::create($request->validated());

        return response()->json($product, 201);
    }
}
