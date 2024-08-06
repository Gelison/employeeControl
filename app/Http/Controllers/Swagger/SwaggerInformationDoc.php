<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Post(
 *     path="/api/information/",
 *     summary="post information\создание information ",
 *     tags={"Information"},
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
 *     path="/api/information/",
 *     summary="get information \  ",
 *     tags={"Information"},
 *    
 *     
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "massage", type = "string", example="entiti removed"),
 *            )),
 *             
 *              
 *          ),
 *                   
 *     ),
 * ),
 * 
 * @OA\Get(
 *     path="/api/information/{information}",
 *     summary="get information\  ",
 *     tags={"Information"},
 *      
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "massage", type = "string", example="entiti removed"),
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
 *     path="/api/information/{information}",
 *     summary="patch information\ обновление ",
 *     tags={"Information"},
 *      @OA\Parameter(
 *         description="information ID \ id уровня",
 *         in="path",
 *         name="information",
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
 *     path="/api/information/{information}",
 *     summary="delete information \ удаление information ",
 *     tags={"Information"},
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





class SwaggerInformationDoc extends Controller
{
    //
}
