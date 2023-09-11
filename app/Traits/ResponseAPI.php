<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ResponseAPI
{
    final function response(string $message = "", int $statusCode = 200, array $data = []): JsonResponse
    {
        return response()->json([
            'error' => !($statusCode == 200),
            'message' => $message,
            'result' => $data
        ], $statusCode);
    }
}
