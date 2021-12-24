<?php

namespace  App\Repositories\Mysql\Eloquent\Admin\Product;

use App\Repositories\Mysql\Eloquent\Admin\Product\ProductInterface;
use App\Models\Product;

final class ProductRepository implements ProductInterface
{
    public static function findById(int $id):Product
    {
        return Product::find($id);
    }

    public function create(array $data):Product
    {
        return Product::create($data);
    }

    public function update(int $id, array $data)
    {
        $product = self::findById($id);

        if ($product) {

            return true;
        }

        return false;
    }

    public function delete(int $id)
    {
    }
}
