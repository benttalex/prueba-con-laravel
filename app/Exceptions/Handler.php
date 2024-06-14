<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
        $this->renderable(function (Throwable $e) {

            if($e instanceof AccessDeniedHttpException) {
                Log::info('From renderable method: '.$e->getMessage());

                // you can return a view, json object, e.t.c
                return response()->json(["message" => "Error", "errors" => ["error" => ["No tiene permisos para esta acción"]]], 422);

            }


        });
    }
}
