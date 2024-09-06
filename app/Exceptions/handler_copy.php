<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\QueryException;
use PDOException;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
    {
        if ($this->isHttpException($exception)) {
            if ($exception->getStatusCode() == 404) {
                return response()->view('errors.404', [], 404);
            }
        }

        return parent::render($request, $exception);
    }


    public function render($request, Throwable $exception)
    {
        if ($exception instanceof QueryException || $exception instanceof PDOException) {
            // Render a custom view for database connection issues
            return response()->view('errors.database', [], 500);
        }

        return parent::render($request, $exception);
    }


}
