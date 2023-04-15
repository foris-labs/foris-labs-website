<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ErrorResponse implements Responsable
{

    /**
     * Create a new error response instance.
     */
    public function __construct(
        public string $message,
        public string $type,
        public int    $code)
    {
    }


    public function toResponse($request): JsonResponse|Response
    {
        return response()->json([
            'type' => $this->code ?? "unknown",
            'message' => $this->message ?? "Internal Server Error",
        ], $this->code);
    }
}

