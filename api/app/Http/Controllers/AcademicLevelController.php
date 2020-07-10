<?php

namespace App\Http\Controllers;

use App\AcademicLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcademicLevelController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //TODO obtener los niveles academicos segun el usuario

        $academicLevels = AcademicLevel::paginate();
        return response()->json($academicLevels, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO guardar los niveles academicos segun el usuario

        $request->validate($this->rules);
        $input = $request->all();
        $AcademicLevel = AcademicLevel::create($input);
        return response()->json($AcademicLevel, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $AcademicLevel = AcademicLevel::find($id);
        return response()->json($AcademicLevel, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->rules);
        $AcademicLevel = AcademicLevel::find($id);
        $AcademicLevel->update($request->all());
        return response()->json($AcademicLevel, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $AcademicLevel = AcademicLevel::find($id);
        if ($AcademicLevel != null){
            $AcademicLevel->delete();
            return response()->noContent();
        }
        return response()->json(['message' => 'El nivel academico no existe'], 500);
    }
}
