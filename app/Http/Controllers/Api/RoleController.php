<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()

    {
        return RoleResource::collection(Role::all()); //
    }

    public function indexRoleInfo()

    {
        return RoleResource::collection(Role::all()); //
    }



    public function store(StoreRoleRequest $request)

    {
        return new RoleResource(Role::create($request->all()));
    }


    public function show(Role $role)

    {
        return new RoleResource($role);
    }
}
