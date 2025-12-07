<?php

declare(strict_types=1);
namespace App\Traits;

trait ApiResponses
{
    protected function success(string $message, array $data = [], int $status = 200)
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
            'status' => $status
        ], $status);
    }

    protected function ok(string $message, int $status)
    {
        return $this->success($message, [], 200);
    }

    protected function error(string $message, int $status = 401)
    {
        return response()->json([
            'message' => $message,
            'status' => $status
        ], $status);
    }
}
