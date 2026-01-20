<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class AuthHandler
{
    public function __invoke(Exceptions $exceptions)
    {
        //         $exceptions->render(function (AuthenticationException $e, Request $request) {
        //             if ($request->wantsJson()) {
        //                 return response()->json(['status' => 'error', 'message' => 'Unauthenticated', 'errors' => null], 401);
        //             }
        //         });

        //         $exceptions->render(function (AuthorizationException $e, Request $request) {
        //             if ($request->wantsJson()) {
        //                 return response()->json(['status' => 'error', 'message' => 'You are not allowed to perform this action', 'errors' => null], 403);
        //             }
        //         });

        //         $exceptions->render(function (AccessDeniedHttpException $e, Request $request) {
        //             if ($request->wantsJson()) {
        //                 return response()->json(['status' => 'error', 'message' => 'You are not allowed to perform this action', 'errors' => null], 403);
        //             }
        //         });

        //         $exceptions->render(function (ValidationException $e, Request $request) {
        //             if ($request->wantsJson()) {
        //                 return response()->json(['status' => 'error', 'message' => 'Validation error', 'errors' => $e->errors()], 422);
        //             }
        //         });

        //         $exceptions->render(function (NotFoundHttpException $e, Request $request) {
        //             if ($request->wantsJson()) {
        //                 return response()->json(['status' => 'error', 'message' => 'Record not found', 'errors' => null], 404);
        //             }
        //         });

        //         $exceptions->render(function (Throwable $e, Request $request) {
        //             if ($request->wantsJson()) {
        //                 return response()->json(['status' => 'error', 'message' => $e->getMessage(), 'errors' => null], 500);
        //             }
        //         });
    }
}
