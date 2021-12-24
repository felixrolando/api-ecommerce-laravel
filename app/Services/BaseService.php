<?php

namespace App\Services;

abstract class BaseService {
    abstract public function execute(array $data);
    abstract protected function saveLog():void;
}