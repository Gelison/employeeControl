<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubstitutionRequest;
use App\Http\Requests\UpdateSubstitutionRequest;
use App\Models\Substitution;

class SubstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubstitutionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Substitution $substitution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubstitutionRequest $request, Substitution $substitution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Substitution $substitution)
    {
        //
    }
}
