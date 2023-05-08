<?php

namespace App\Http\Enums;

enum ErrorType: string
{
    case NotConnected = 'not_connected';

    case NotAuthenticated = 'not_authenticated';

    case CannotDeserialize = 'cannot_deserialize';

    case InvalidGrant = 'invalid_grant';

    case InvalidRequest = 'invalid_request';

    case InvalidAccessToken = 'invalid_access_token';

    case Unknown = 'unknown';

}
