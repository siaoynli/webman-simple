<?php

namespace App\Exceptions;


use Throwable;
use Webman\Exception\ExceptionHandler;
use Webman\Http\Request;
use Webman\Http\Response;
use support\exception\BusinessException;


class Handler extends ExceptionHandler
{
  public $dontReport = [
    BusinessException::class,
  ];

  public function report(Throwable $exception)
  {
    parent::report($exception);
  }

  public function render(Request $request, Throwable $exception): Response
  {
    if (($exception instanceof BusinessException) && ($response = $exception->render($request))) {
      return $response;
    }

    return parent::render($request, $exception);
  }
}
