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
        try {

            $brand['name'] = $data['name'];

            $create_brand = $this->brandRepository->create($brand);

            return $create_brand;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    protected function saveLog(): void
    {
    }
}
