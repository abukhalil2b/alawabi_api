<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
       
        $this->renderable(function (RouteNotFoundException $e) {
           return response(["message"=>"Route Not Found"],404);
        });
        // $this->renderable(function (QueryException $e) {
        //    return response(["message"=>"QueryException"],404);
        // });
        $this->renderable(function (MethodNotAllowedHttpException $e) {
           return response(["message"=>"Method Not Allowed"],404);
        });
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
