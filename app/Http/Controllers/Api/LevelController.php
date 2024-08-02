<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLevelRequest;
use App\Http\Requests\UpdateLevelRequest;
use App\Http\Resources\LevelResource;
use App\Models\Level;


class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny');

        return LevelResource::collection(Level::all()); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLevelRequest $request)
    {
        $this->authorize('create');

        return Level::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Level $level)
    {
        $this->authorize('view');

        return new LevelResource($level);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLevelRequest $request, Level $level)
    {
        $this->authorize('update');

        $level->update($request->all());
        return $level;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Level $level)
    {
        $this->authorize('forceDelete');

        $level->delete();
        return response()->json([
            'massage' => 'entiti removed'
        ]);
    }
}
