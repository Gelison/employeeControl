<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Post(
 *     path="/api/substitution/",
 *     summary="post substitution\создание substitution ",
 *     tags={"Substitution"},
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
 *     path="/api/substitution/",
 *     summary="get substitution \  ",
 *     tags={"Substitution"},
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
 *     path="/api/substitution/{substitution}",
 *     summary="get substitution\  ",
 *     tags={"Substitution"},
 *      @OA\Parameter(
 *         description="position ID \ id уровня",
 *         in="path",
 *         name="position",
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
 *     path="/api/substitution/{substitution}",
 *     summary="patch substitution\ обновление ",
 *     tags={"Substitution"},
 *      @OA\Parameter(
 *         description="substitution ID \ id уровня",
 *         in="path",
 *         name="substitution",
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
 *     path="/api/substitution/{substitution}",
 *     summary="delete substitution \ удаление substitution ",
 *     tags={"Substitution"},
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


class SwaggerSubstitutionDoc extends Controller
{
    //
}
