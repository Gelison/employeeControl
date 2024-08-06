<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Post(
 *     path="/api/doctype/",
 *     summary="post doctype\создание уровней образования ",
 *     tags={"Doctype"},
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Сведетельство"), 
 *                  )
 *              }
 *          )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example="1"),
 *              @OA\Property(property="name", type="string", example="Сведетельство"),
 *   
 *          ),
 *                   
 *     ),
 * ),
 * 
 * 
 * @OA\Get(
 *     path="/api/doctype/",
 *     summary="get doctype \ список уровней образования ",
 *     tags={"Doctype"},
 *    
 *     
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "data", type = "array", @OA\Items(
 *              @OA\Property(property="id", type="integer", example="1"),
 *              @OA\Property(property="name", type="string", example="Сведетельство"),
 *            )),
 *             
 *              
 *          ),
 *                   
 *     ),
 * ),
 * 
 * @OA\Get(
 *     path="/api/doctype/{doctype}",
 *     summary="get doctype\ получение одной записи уровня образования ",
 *     tags={"Doctype"},
 *      @OA\Parameter(
 *         description="doctype ID \ id уровня",
 *         in="path",
 *         name="doctype",
 *         required=true,
 *         example=1
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "data", type = "array", @OA\Items(
 *              @OA\Property(property="id", type="integer", example="1"),
 *              @OA\Property(property="name", type="string", example="Сведетельство"),
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
 *     path="/api/doctype/{doctype}",
 *     summary="patch doctype\ обновление ",
 *     tags={"Doctype"},
 *      @OA\Parameter(
 *         description="doctype ID \ id уровня",
 *         in="path",
 *         name="doctype",
 *         required=true,
 *         example=2
 *     ),
 *  @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Сведетельство"), 
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
 *              @OA\Property(property="name", type="string", example="Сведетельство"),
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
 *     path="/api/doctype/{doctype}",
 *     summary="delete doctype \ удалене уровней образования ",
 *     tags={"Doctype"},
 * 
 *     @OA\Parameter(
 *         description="удаление",
 *         in="path",
 *         name="doctype",
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

class SwaggerDoctypeDoc extends Controller
{
    //
}
