<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorepositionRequest;
use App\Http\Requests\UpdatepositionRequest;
use App\Models\position;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return position::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepositionRequest $request)
    {
        return position::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(position $position)
    {
        return $position;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepositionRequest $request, position $position)
    {
        $position->update($request->all());
        return $position;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(position $position)
    {
        
        $position->delete();
        return response()->json([
            'massage' => 'entiti removed'
        ]);
    }

    }
