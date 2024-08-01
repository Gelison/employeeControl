<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Resources\RoleInfoResource;
use App\Http\Resources\RoleResource;
use App\Models\Role;
use App\Models\RoleInfo;

class RoleController extends Controller
{

    public function roleindex()

    {
        return RoleResource::collection(Role::all()); //
    }

    public function roleinfoindex()

    {
        return RoleInfoResource::collection(RoleInfo::all()); //
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
