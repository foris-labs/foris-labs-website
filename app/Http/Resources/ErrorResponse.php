<?php

namespace App\Http\Resources;

use App\Http\Enums\ErrorType;
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
        public ErrorType $type = ErrorType::Unknown,
        public int $code = 400
    )
    {
    }


    public static function fromResponse(Response $response): self
    {
        $responseJson = json_decode($response->getContent(), true);

        return new self(
            $responseJson['message'],
            ErrorType::fromValue($responseJson['type']),
            $response->getStatusCode()
        );
    }


    public function toResponse($request): JsonResponse|Response
    {
        return response()->json([
            'type' => $this->type->value,
            'message' => $this->message ?? "Internal Server Error",
        ], $this->code);
    }
}


