<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
   public function index()
   {
       $roles = Role::with('permissions')->get();
       return response()->json($roles, 200);
   }
   /*public function index()
   {
       $roles = Role::orderBy('id','Desc')->paginate(2);
       return view('role.index',compact('roles'));
   }*/

   public function store(Request $request)
   {
       $role = Role::create($request->all());
       return response()->json($role, 201);
   }

   public function update(Request $request, Role $role)
   {
        $role->update($request->all());
        return response()->json($role, 200);
   }

   public function destroy(Role $role)
   {
       $role->delete();
       return response()->json(null, 204);
   }

}
