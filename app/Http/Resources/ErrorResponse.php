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

        $errorKey = self::detectErrorKey($responseJson);

        return new self(
            $responseJson['message'],
            ErrorType::fromValue($responseJson[$errorKey]),
            $response->getStatusCode()
        );
    }

    public static function notFound(string $message = 'Not Found'): self
    {
        return new self($message, ErrorType::NotFound, 404);
    }


    public function toResponse($request): JsonResponse|Response
    {
        return response()->json([
            'type' => $this->type->value,
            'message' => $this->message ?? "Internal Server Error",
        ], $this->code);
    }

    private static function detectErrorKey(array $responseJson): ?string
    {
        return match (true) {
            array_key_exists('error', $responseJson) => 'error',
            array_key_exists('error_type', $responseJson) => 'error_type',
            array_key_exists('type', $responseJson) => 'type',
            default => null,
        };
    }
}


