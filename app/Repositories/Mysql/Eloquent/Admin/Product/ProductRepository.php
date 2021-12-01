<?php

namespace  App\Repositories\Mysql\Eloquent\Admin\Product;

use App\Repositories\Mysql\Eloquent\Admin\Product\ProductInterface;
use App\Models\Product;

class ProductRepository implements ProductInterface
{
    public static function findById(int $id)
    {
        return Product::find($id);
    }

    public function create(array $data)
    {
        return Product::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['email'],
            'password' => $data
        ]);
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
