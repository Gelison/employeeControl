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
 *                   @OA\Property(property="informationId", type="string", example="1"),
 *                   @OA\Property(property="date", type="string", example="01.01.2000"),
 *                   @OA\Property(property="order_number", type="string", example="123"),
 *                   @OA\Property(property="substitutions_occasion", type="string", example="программист"),
 *                   @OA\Property(property="positionId", type="integer", example="1")  
 *                  )
 *              }
 *          )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *           @OA\Property(property = "data", type = "array", @OA\Items(
 *              @OA\Property(property="id", type="integer", example="1"),
 *              @OA\Property(property="informationId", type="string", example="1"),
 *              @OA\Property(property="date", type="string", example="01.01.2000"),
 *              @OA\Property(property="order_number", type="string", example="123"),
 *              @OA\Property(property="substitutions_occasion", type="string", example="программист"),
 *              @OA\Property(property="positionId", type="integer", example="1")   
 *          ),
 *                   
 *     ),
 * ),
 * 
 * 
 * @OA\Get(
 *     path="/api/substitution/",
 *     summary="get substitution",
 *     tags={"Substitution"},
 *    
 *     
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *           @OA\Property(property = "massage", type = "string", example="route not available"),
 *          ),
 *                   
 *     ),
 * ),
 * 
 * @OA\Get(
 *     path="/api/substitution/{substitution}",
 *     summary="get substitution",
 *     tags={"Substitution"},
 *     @OA\Parameter(
 *         description="substitution ID \ id substitution",
 *         in="path",
 *         name="substitution",
 *         required=true,
 *         example=1
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property="massage", type="string", example="route not available")
 *          )
 *                   
 *     )
 * )
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
 *                 @OA\Schema(
 *                   @OA\Property(property="informationId", type="string", example="1"),
 *                   @OA\Property(property="date", type="string", example="01.01.2000"),
 *                   @OA\Property(property="order_number", type="string", example="123"),
 *                   @OA\Property(property="substitutions_occasion", type="string", example="программист"),
 *                   @OA\Property(property="positionId", type="integer", example="1")  
 *                  )
 *              }
 *          )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "data", type = "array", @OA\Items(
 *                   @OA\Property(property="informationId", type="string", example="1"),
 *                   @OA\Property(property="date", type="string", example="01.01.2000"),
 *                   @OA\Property(property="order_number", type="string", example="123"),
 *                   @OA\Property(property="substitutions_occasion", type="string", example="программист"),
 *                   @OA\Property(property="positionId", type="integer", example="1")  
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
 *   ),
 * 
 * 
 * 
 */


class SwaggerSubstitutionDoc extends Controller
{
    //
}
