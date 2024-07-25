<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInformationRequest;
use App\Http\Requests\UpdateInformationRequest;
use App\Http\Resources\InformationResource;
use App\Models\Information;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return InformationResource::collection(Information::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInformationRequest $request)
    {
        return new InformationResource(Information::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Information $information)
    {
        return new InformationResource($information);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInformationRequest $request, Information $information)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Information $information)
    {
        $information->delete();
        return response()->json([
            'massage' => 'entiti removed'
        ]);
    }
}
