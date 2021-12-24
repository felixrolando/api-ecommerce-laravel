<?php

namespace App\Http\Controllers\Api\V1\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Services\Admin\Brand\CreateBrandService;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    private $createBrandService;

    public function __construct(CreateBrandService $createBrandService)
    {
        $this->createBrandService = $createBrandService;
    }

    public function index()
    {
    }

    public function create(Request $request)
    {
        try {
            return  $this->createBrandService->execute($request->all());
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
