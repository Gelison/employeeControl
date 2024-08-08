<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;


/**
 * @OA\Post(
 *     path="/api/certification/",
 *     summary="post certification\создание certification ",
 *     tags={"Certification"},
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                     @OA\Property(property="informationId", type="integer", example="1"), 
 *                     @OA\Property(property="date", type="string", example="01.01.2000"), 
 *                     @OA\Property(property="record_number", type="string", example="12354"), 
 *                     @OA\Property(property="division", type="integer", example="1"), 
 *                     @OA\Property(property="position", type="integer", example="1"), 
 *                     @OA\Property(property="recomendetion", type="string", example="рекомандация"), 
 *                  )
 *              }
 *          )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *               @OA\Property(property="informationId", type="integer", example="1"), 
 *               @OA\Property(property="date", type="string", example="01.01.2000"), 
 *               @OA\Property(property="record_number", type="string", example="12354"), 
 *               @OA\Property(property="division", type="integer", example="1"), 
 *               @OA\Property(property="divisionName", type="string", example="рекомандация"), 
 *               @OA\Property(property="position", type="integer", example="1"), 
 *               @OA\Property(property="positionName", type="string", example="рекомандация"), 
 *               @OA\Property(property="recomendetion", type="string", example="рекомандация"), 
 *   
 *          ),
 *                   
 *     ),
 * ),
 * 
 * 
 * @OA\Get(
 *     path="/api/certification/",
 *     summary="get certification \  ",
 *     tags={"Certification"},
 *    
 *     
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "massage", type = "string", example="route not available"),
 *              ),
 *          ),
 * ),
 * 
 * @OA\Get(
 *     path="/api/certification/{certification}",
 *     summary="get certification\ получение одной записи уровня образования ",
 *     tags={"Certification"},
 *      @OA\Parameter(
 *         description="certification ID \ id уровня",
 *         in="path",
 *         name="certification",
 *         required=true,
 *         example=1
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "massage", type = "string", example="route not available"),
 *
 *             
 *              
 *          ),
 *                   
 *     ),
 * 
 * ),
 * 
 * @OA\Patch(
 *     path="/api/certification/{certification}",
 *     summary="patch certification\ обновление ",
 *     tags={"Certification"},
 *      @OA\Parameter(
 *         description="certification ID \ id уровня",
 *         in="path",
 *         name="certification",
 *         required=true,
 *         example=2
 *     ),
 *  @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                     @OA\Property(property="informationId", type="integer", example="1"), 
 *                     @OA\Property(property="date", type="string", example="01.01.2000"), 
 *                     @OA\Property(property="record_number", type="string", example="12354"), 
 *                     @OA\Property(property="division", type="integer", example="1"), 
 *                     @OA\Property(property="divisionName", type="string", example="рекомандация"), 
 *                     @OA\Property(property="position", type="integer", example="1"), 
 *                     @OA\Property(property="positionName", type="string", example="рекомандация"), 
 *                     @OA\Property(property="recomendetion", type="string", example="рекомандация"), 
 *                  )
 *              }
 *          )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "data", type = "array", @OA\Items(
 *                @OA\Property(property="informationId", type="integer", example="1"), 
 *                @OA\Property(property="date", type="string", example="01.01.2000"), 
 *                @OA\Property(property="record_number", type="string", example="12354"), 
 *                @OA\Property(property="division", type="integer", example="1"), 
 *                @OA\Property(property="divisionName", type="string", example="рекомандация"), 
 *                @OA\Property(property="position", type="integer", example="1"), 
 *                @OA\Property(property="positionName", type="string", example="рекомандация"), 
 *                @OA\Property(property="recomendetion", type="string", example="рекомандация"), 
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
 *     path="/api/certification/{certification}",
 *     summary="delete certification \ удаление certification ",
 *     tags={"Certification"},
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


class SwaggerCertificationDoc extends Controller
{
    //
}
