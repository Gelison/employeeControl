<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



/**
 * @OA\Post(
 *     path="/api/education/",
 *     summary="post education\создание education ",
 *     tags={"Education"},
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="программист"), 
 *                  )
 *              }
 *          )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example="1"),
 *              @OA\Property(property="name", type="string", example="программист"),
 *   
 *          ),
 *                   
 *     ),
 * ),
 * 
 * 
 * @OA\Get(
 *     path="/api/education/",
 *     summary="get education \  ",
 *     tags={"Education"},
 *    
 *     
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "data", type = "array", @OA\Items(
 *              @OA\Property(property="id", type="integer", example="1"),
 *              @OA\Property(property="name", type="string", example="программист"),
 *            )),
 *             
 *              
 *          ),
 *                   
 *     ),
 * ),
 * 
 * @OA\Get(
 *     path="/api/education/{education}",
 *     summary="get education\ получение одной записи уровня образования ",
 *     tags={"Education"},
 *      @OA\Parameter(
 *         description="education ID \ id уровня",
 *         in="path",
 *         name="education",
 *         required=true,
 *         example=1
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "data", type = "array", @OA\Items(
 *              @OA\Property(property="id", type="integer", example="1"),
 *              @OA\Property(property="name", type="string", example="программист"),
 *            )),
 *             
 *              
 *          ),
 *                   
 *     ),
 * 
 * ),
 * 
 * @OA\Patch(
 *     path="/api/education/{education}",
 *     summary="patch education\ обновление ",
 *     tags={"Education"},
 *      @OA\Parameter(
 *         description="education ID \ id уровня",
 *         in="path",
 *         name="education",
 *         required=true,
 *         example=2
 *     ),
 *  @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="программист"), 
 *                  )
 *              }
 *          )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "data", type = "array", @OA\Items(
 *              @OA\Property(property="id", type="integer", example="1"),
 *              @OA\Property(property="name", type="string", example="программист"),
 *            )),
 *             
 *              
 *          ),
 *                   
 *     ),
 * 
 * ),
 * 
 * @OA\Delete(
 *     path="/api/education/{education}",
 *     summary="delete education \ удаление education ",
 *     tags={"Education"},
 * 
 *     @OA\Parameter(
 *         description="удаление",
 *         in="path",
 *         name="level",
 *         required=true,
 *         example=1,
 *     ),
 *     
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "massage", type = "string", example="entiti removed"),
 *             
 *              
 *          ),
 *
 *     ),
 * ),
 * 
 * 
 */


class SwaggerEducationDoc extends Controller
{
    //
}
