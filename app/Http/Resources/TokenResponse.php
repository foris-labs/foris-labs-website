<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TokenResponse implements Responsable
{

    /**
     * Create a new error response instance.
     */
    public function __construct(
        public string $access_token,
        public string $refresh_token,
        public int    $code)
    {
    }


    public function toResponse($request): JsonResponse|Response
    {
        return response()->json([
            'access_token' => $this->access_token,
            'refresh_token' => $this->refresh_token,
        ], $this->code);
    }
}

