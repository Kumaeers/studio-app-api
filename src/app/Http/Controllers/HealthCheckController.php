<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

/**
 * Class HealthCheckController
 * @package App\Http\Controllers
 */
class HealthCheckController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        return response()->json('ok', Response::HTTP_OK);
    }
}
