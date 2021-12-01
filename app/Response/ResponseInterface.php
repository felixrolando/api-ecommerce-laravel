<?php

namespace App\Response;

use Illuminate\Http\JsonResponse;

interface ResponseInterface
{
    public static function success($data, String $message, $code): JsonResponse;
    public static function error($data, String $message, $code): JsonResponse;
}
