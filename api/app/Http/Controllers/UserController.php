<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $rules = [
        'name' => 'required|regex:/^[\pL\s\-]+$/u',
        'username' => 'required|email|max:255|unique:users,email',
        'password'=> 'required|min:6'
    ];

    protected $updateRules = [
        'name' => 'regex:/^[\pL\s\-]+$/u',
        'username' => 'email|max:255|unique:users,email',
        'password'=> 'min:6'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();

        return response()->json($users, 200);
    }

    public function user()
    {
        return response()->json(Auth::user(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'username' => 'required|email|unique:users', 
            'password' => 'required',
        ]);

        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);

        //$success['token'] = 
        $user->createToken('MiApp')->accessToken;
        //$success['name'] = $user->name;
        //return response()->json(['success'=>$success], 200); 

        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return response()->json($user, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->updateRules);

        $data = $request->all();

        $user = User::find($id);

        $user->update([
            'name' => $data['name'],
            'avatar' => $data['avatar'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'rut' => $data['rut'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'dob' => $data['dob']
        ]);

        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user != null){
            $user->delete();
            return response()->noContent();
        }

        return response()->json(['message' => 'El usuario no existe'], 500);
    }

    public function permissions() {
        $permissions = [];
        foreach (Permission::all() as $permission) {
            if (Auth::user()->can($permission->name)) {
                $permissions[] = $permission->name;
            }
        }
        return response()->json($permissions, 200);
    }
}