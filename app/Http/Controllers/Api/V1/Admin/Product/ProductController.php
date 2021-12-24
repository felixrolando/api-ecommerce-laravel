<?php

namespace App\Http\Controllers\Api\V1\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Admin\Product\CreateProductService;

class ProductController extends Controller
{
    private $createProductService;

    public function __construct(CreateProductService $createProductService)
    {
        $this->createProductService = $createProductService;
    }

    public function create(Request $request)
    {
        try {
            $this->createProductService->execute($request->all());
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
