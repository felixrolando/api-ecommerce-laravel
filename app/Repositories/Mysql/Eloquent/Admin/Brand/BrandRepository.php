<?php

namespace  App\Repositories\Mysql\Eloquent\Admin\Brand;

use App\Repositories\Mysql\Eloquent\Admin\Brand\BrandInterface;
use App\Models\Brand;

final class BrandRepository implements BrandInterface
{
    public static function findById(int $id): Brand
    {
        return Brand::find($id);
    }
    public function create(array $data): Brand
    {
        return Brand::create($data);
    }
    public function update(int $id, array $data)
    {
    }
    public function delete(int $id)
    {
    }
}
