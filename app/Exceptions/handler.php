<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\QueryException;
use PDOException;
use Illuminate\Database\DatabaseConnectionException;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
    {
        // Handle 404 errors
        if ($this->isHttpException($exception)) {
            if ($exception->getStatusCode() == 404) {
                return response()->view('errors.404', [], 404);
            }
        }

        // Handle specific database connection errors
        if (
            $exception instanceof QueryException || 
            $exception instanceof PDOException || 
            $exception instanceof DatabaseConnectionException
        ) {
            // Check if it's a "Connection refused" error
            if (strpos($exception->getMessage(), 'SQLSTATE[HY000] [2002] Connection refused') !== false) {
                return response()->view('errors.database', [], 500);
            }
        }

        return parent::render($request, $exception);
    }
}
