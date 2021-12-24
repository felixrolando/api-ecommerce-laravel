<?php

namespace App\Repositories\Mysql\Eloquent\Admin\Brand;

use App\Models\Brand;

interface BrandInterface
{
    public static function findById(int $id): Brand;
    public function create(array $data): Brand;
    public function update(int $id, array $data);
    public function delete(int $id);
}
