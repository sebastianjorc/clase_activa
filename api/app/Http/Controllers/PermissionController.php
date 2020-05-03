<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
   public function index()
   {
       $permissions = Permission::all();

       return response()->json($permissions, 200);
   }

   public function store(Request $request)
   {
       $permission = Permission::create($request->all());

       return response()->json($permission, 201);
   }

   public function update(Request $request, Permission $permission)
   {
        $permission->update($request->all());

        return response()->json($permission, 200);
   }

   public function destroy(Permission $permission)
   {
       $permission->delete();

       return response()->json(null, 204);
   }
}
