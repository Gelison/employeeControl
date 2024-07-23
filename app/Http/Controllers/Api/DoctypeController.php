<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDoctypeRequest;
use App\Http\Requests\UpdateDoctypeRequest;
use App\Models\Doctype;

class DoctypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Doctype::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctypeRequest $request)
    {
        return Doctype::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctype $doctype)
    {
        return $doctype;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctypeRequest $request, Doctype $doctype)
    {
        $doctype->update($request->all());
        return $doctype;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctype $doctype)
    {
  
        $doctype->delete();
        return response()->json([
            'massage' => 'entiti removed'
        ]);
    }
}
