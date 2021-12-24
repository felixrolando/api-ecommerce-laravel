<?php

namespace App\Services\Admin\Product;
use App\Repositories\Mysql\Eloquent\Admin\Product\ProductRepository;
use App\Services\ServiceInterface;

final class CreateProductService implements ServiceInterface
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository){
        $this->productRepository = $productRepository;
    }

    public function execute(array $data){

        $this->productRepository->create();

    }

}
