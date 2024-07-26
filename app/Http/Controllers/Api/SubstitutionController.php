<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubstitutionRequest;
use App\Http\Requests\UpdateSubstitutionRequest;
use App\Http\Resources\SubstitutionResource;
use App\Models\Substitution;

class SubstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SubstitutionResource::collection(Substitution::paginate(5)); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubstitutionRequest $request)
    {
        return new SubstitutionResource(Substitution::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Substitution $substitution)
    {
        return new SubstitutionResource($substitution);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubstitutionRequest $request, Substitution $substitution)
    {
        $substitution->update($request->all());
        return $substitution; 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Substitution $substitution)
    {
        $substitution->delete();
        return response()->json([
            'massage' => 'entiti removed'
        ]);
    }
}
