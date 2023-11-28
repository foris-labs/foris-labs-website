<?php

namespace App\Exceptions;

use App\Http\Enums\ErrorType;
use Exception;
use Illuminate\Http\JsonResponse;
use Throwable;

class ForisLabsException extends Exception
{
    public function __construct(string $message, protected ErrorType $errorType, ?Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }

    public function getErrorType(): ErrorType
    {
        return $this->errorType;
    }

    public function getStatusCode(): int
    {
        return $this->errorType->getStatusCode();
    }

    public static function NotConnected(): self
    {
        return new self('Not connected to the server.', ErrorType::NotConnected);
    }

    public static function NotAuthenticated(): self
    {
        return new self('Not authenticated.', ErrorType::NotAuthenticated);
    }

    public static function CannotDeserialize(): self
    {
        return new self('Cannot deserialize request.', ErrorType::CannotDeserialize);
    }

    public static function InvalidClient(): self
    {
        return new self('Invalid client.', ErrorType::InvalidClient);
    }

    public static function InvalidRequestInput(): self
    {
        return new self('Invalid request input.', ErrorType::InvalidRequestInput);
    }


    public static function TriviaWindowClosed(): self
    {
        return new self('Trivia time window has elapsed.', ErrorType::TriviaWindowClosed);
    }

    public static function TriviaAlreadyTaken(): self
    {
        return new self('Trivia already taken for today.', ErrorType::TriviaAlreadyTaken);
    }
}
