<?php

namespace App\Services\Admin\Brand;

use App\Repositories\Mysql\Eloquent\Admin\Brand\BrandRepository;
use App\Services\BaseService;

final class CreateBrandService extends BaseService
{
    private $brandRepository;

    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    public function execute(array $data)
    {

        return $data;

        try {

            $brand[''] = $data[''];
            $brand[''] = $data[''];
            $brand[''] = $data[''];

            $create_brand = $this->brandRepository->create($brand);

            return $create_brand;
        } catch (\Throwable $th) {
        }
    }

    protected function saveLog(): void
    {
    }
}
