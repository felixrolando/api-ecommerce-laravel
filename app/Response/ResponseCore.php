<?php

namespace App\Response;

use Illuminate\Http\JsonResponse;
use App\Response\ResponseInterface;

class ResponseCore extends JsonResponse implements ResponseInterface
{

    function __construct(String $status, $data, String $message = null, $code)
    {
        if ($status)
            $response['status'] = $status;

        if ($message)
            $response['message'] = $message;

        if ($data)
            $response['data'] = $data;

        parent::__construct($response, $code);
    }


    public static function success($data, String $message = null, $code = 200): JsonResponse
    {
        return new ResponseCore("Success", $data, $message, $code);
    }

    public static function error($data, String $message = null, $code = 400): JsonResponse
    {
        return new ResponseCore("Error", $data, $message, $code);
    }
}
