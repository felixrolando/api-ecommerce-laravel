<?php

namespace  App\Repositories\Mysql\Eloquent\Admin\Product;

interface ProductInterface
{

    public function findById(int $id);
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
}
