<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Domain\Product\Resources\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function getAll():ProductResource
    {
        return new ProductResource(DB::table('product')->paginate(15));
    }
}
