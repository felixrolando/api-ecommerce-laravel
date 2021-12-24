<?php

namespace App\Services\Admin\Product;

use App\Repositories\Mysql\Eloquent\Admin\Product\ProductRepository;
use App\Services\BaseService;

final class CreateProductService extends BaseService
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function execute(array $data)
    {

        return $data;

        try {

            $pruduct[''] = $data[''];
            $pruduct[''] = $data[''];
            $pruduct[''] = $data[''];

            $create_pruduct = $this->productRepository->create($pruduct);

            return $create_pruduct;
        } catch (\Throwable $th) {
        }
    }

    protected function saveLog(): void
    {
    }
}
