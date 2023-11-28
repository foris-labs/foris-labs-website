<?php

namespace App\Http\Enums;

enum ErrorType: string
{
    case NotConnected = 'not_connected';

    case NotAuthenticated = 'not_authenticated';

    case CannotDeserialize = 'cannot_deserialize';

    case InvalidClient = 'invalid_client';

    case InvalidRequestInput = 'invalid_request_input';

    case TriviaWindowClosed = 'trivia_window_closed';

    case TriviaAlreadyTaken = 'trivia_already_taken';

    case Unknown = 'unknown';

    public static function fromValue(string $value): self
    {
        return match ($value) {
            'not_connected' => self::NotConnected,
            'not_authenticated', 'access_denied' => self::NotAuthenticated,
            'cannot_deserialize' => self::CannotDeserialize,
            'invalid_client' => self::InvalidClient,
            'invalid_request', 'invalid_request_input', 'invalid_grant', 'unsupported_grant_type' => self::InvalidRequestInput,
            default => self::Unknown,
        };
    }

    public function getStatusCode(): int
    {
        return match ($this) {
            self::NotConnected => 503,
            self::NotAuthenticated, self::InvalidClient => 401,
            self::CannotDeserialize => 400,
            self::InvalidRequestInput => 422,
            self::TriviaWindowClosed => 404,
            self::TriviaAlreadyTaken => 403,
            default => 500,
        };
    }

}
