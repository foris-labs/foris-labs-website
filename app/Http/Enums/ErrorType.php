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

}
