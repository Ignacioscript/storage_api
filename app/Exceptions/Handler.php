<?php

namespace App\Exceptions;



use App\Traits\ApiResponses;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    use ApiResponses;
    /**
     * Render the exception as an HTTP response.
     * @param Request $request
     * @param Throwable $exception
     */
    public function render($request, Throwable $exception)
    {
        if (
            $exception instanceof ModelNotFoundException ||
            $exception instanceof NotFoundHttpException
        ) {
           return $this->error('Resource not found', 404);
        }

        return parent::render($request, $exception);
    }
}
