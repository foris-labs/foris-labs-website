<?php

namespace App\Exceptions;

use App\Http\Enums\ErrorType;
use App\Http\Resources\ErrorResponse;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Passport\Exceptions\OAuthServerException;
use League\OAuth2\Server\Exception\OAuthServerException as LeagueException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        if (!$request->wantsJson())
            return parent::render($request, $e);

        if($e instanceof ForisLabsException) {
            return new ErrorResponse(
                $e->getMessage(),
                $e->getErrorType(),
                $e->getStatusCode()
            );
        }

        if ($e instanceof ValidationException) {
            return new ErrorResponse(
                $e->getMessage(),
                ErrorType::InvalidRequestInput,
                422
            );
        }

        if ($e instanceof AuthenticationException) {
            return new ErrorResponse(
                $e->getMessage(),
                ErrorType::NotAuthenticated,
                401
            );
        }

        if($e instanceof OAuthServerException) {
            $leagueException = $e->getPrevious();

            if($leagueException instanceof LeagueException) {
                return new ErrorResponse(
                    $leagueException->getMessage(),
                    ErrorType::fromValue($leagueException->getErrorType()),
                    $leagueException->getHttpStatusCode()
                );
            }
        }

        return new ErrorResponse(
            $e->getMessage(),
            ErrorType::Unknown,
            500
        );
    }
}
