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
 *                     @OA\Property(property="informationId", type="integer", example="1"), 
 *                     @OA\Property(property="date", type="string", example="01.01.2000"), 
 *                     @OA\Property(property="doctypeId", type="integer", example="1"), 
 *                     @OA\Property(property="number", type="string", example="12354"), 
 *                     @OA\Property(property="levelId", type="integer", example="1"), 
 *                     @OA\Property(property="qualification", type="string", example="рекомандация"), 
 *                     @OA\Property(property="speciality", type="string", example="рекомандация"), 
 *                     @OA\Property(property="rank", type="string", example="рекомандация"), 
 *                     @OA\Property(property="education_form", type="string", example="рекомандация"), 
 *                     @OA\Property(property="institution", type="string", example="рекомандация"), 
 *                  )
 *              }
 *          )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *                     @OA\Property(property="informationId", type="integer", example="1"), 
 *                     @OA\Property(property="date", type="string", example="01.01.2000"), 
 *                     @OA\Property(property="doctypeId", type="integer", example="1"), 
 *                     @OA\Property(property="number", type="string", example="12354"), 
 *                     @OA\Property(property="levelId", type="integer", example="1"), 
 *                     @OA\Property(property="qualification", type="string", example="рекомандация"), 
 *                     @OA\Property(property="speciality", type="string", example="рекомандация"), 
 *                     @OA\Property(property="rank", type="string", example="рекомандация"), 
 *                     @OA\Property(property="education_form", type="string", example="рекомандация"), 
 *                     @OA\Property(property="institution", type="string", example="рекомандация"),  *   
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
 *                     @OA\Property(property="informationId", type="integer", example="1"), 
 *                     @OA\Property(property="date", type="string", example="01.01.2000"), 
 *                     @OA\Property(property="doctypeId", type="integer", example="1"), 
 *                     @OA\Property(property="number", type="string", example="12354"), 
 *                     @OA\Property(property="levelId", type="integer", example="1"), 
 *                     @OA\Property(property="qualification", type="string", example="рекомандация"), 
 *                     @OA\Property(property="speciality", type="string", example="рекомандация"), 
 *                     @OA\Property(property="rank", type="string", example="рекомандация"), 
 *                     @OA\Property(property="education_form", type="string", example="рекомандация"), 
 *                     @OA\Property(property="institution", type="string", example="рекомандация"),  *         
 *                )),
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
 *             @OA\Property(property = "massage", type = "string", example="route not available"),
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
 *                     @OA\Property(property="informationId", type="integer", example="1"), 
 *                     @OA\Property(property="date", type="string", example="01.01.2000"), 
 *                     @OA\Property(property="doctypeId", type="integer", example="1"), 
 *                     @OA\Property(property="number", type="string", example="12354"), 
 *                     @OA\Property(property="levelId", type="integer", example="1"), 
 *                     @OA\Property(property="qualification", type="string", example="рекомандация"), 
 *                     @OA\Property(property="speciality", type="string", example="рекомандация"), 
 *                     @OA\Property(property="rank", type="string", example="рекомандация"), 
 *                     @OA\Property(property="education_form", type="string", example="рекомандация"), 
 *                     @OA\Property(property="institution", type="string", example="рекомандация"),  *         
 *                  )
 *              }
 *          )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *            @OA\Property(property = "data", type = "array", @OA\Items(
 *                     @OA\Property(property="informationId", type="integer", example="1"), 
 *                     @OA\Property(property="date", type="string", example="01.01.2000"), 
 *                     @OA\Property(property="doctypeId", type="integer", example="1"), 
 *                     @OA\Property(property="number", type="string", example="12354"), 
 *                     @OA\Property(property="levelId", type="integer", example="1"), 
 *                     @OA\Property(property="qualification", type="string", example="рекомандация"), 
 *                     @OA\Property(property="speciality", type="string", example="рекомандация"), 
 *                     @OA\Property(property="rank", type="string", example="рекомандация"), 
 *                     @OA\Property(property="education_form", type="string", example="рекомандация"), 
 *                     @OA\Property(property="institution", type="string", example="рекомандация"),  *         
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
