<?php

namespace App\Http\Enums;

enum ErrorType: string
{
    case NotConnected = 'not_connected';

    case NotAuthenticated = 'not_authenticated';

    case CannotDeserialize = 'cannot_deserialize';

    case InvalidClient = 'invalid_client';

    case InvalidRequestInput = 'invalid_request_input';

    case Unknown = 'unknown';

    public static function fromValue(string $value): self
    {
        return match ($value) {
            'not_connected' => self::NotConnected,
            'not_authenticated', 'access_denied' => self::NotAuthenticated,
            'cannot_deserialize' => self::CannotDeserialize,
            'invalid_client' => self::InvalidClient,
            'invalid_request', 'invalid_grant', 'unsupported_grant_type' => self::InvalidRequestInput,
            default => self::Unknown,
        };
    }

}
