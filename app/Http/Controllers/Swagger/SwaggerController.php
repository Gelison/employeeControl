<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *  title = "Doc API",
 *  version="1.0.0",
 * ),
 *  @OA\PathItem
 *  (
 *      path = "/api/documentation/"
 *  )
 * 
 * @OA\Componentents(
 *      @OA\SecurityScheme(
 *          securityScheme="bearerAuth",
 *          type="http",
 *          scheme="bearer",
 * 
 * 
 *      )
 * )
 * 
 * 
 */


class SwaggerController extends Controller
{
    //
}
