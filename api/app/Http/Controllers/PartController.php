<?php

namespace App\Http\Controllers;

use App\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    protected $rules = [
        'name' => 'required|min:2|max:255',
        'description' => 'required|min:2|max:255',
        'active' => 'boolean'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO obtener los repuestos segun el usuario
        $parts = Part::paginate();
        return response()->json($parts, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO guardar los repuestos segun el usuario

        $request->validate($this->rules);
        $input = $request->all();
        $part = Part::create($input);
        return response()->json($part, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $part = Part::find($id);
        return response()->json($part, 200);
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
        $part = Part::find($id);
        $part->update($request->all());
        return response()->json($part, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $part = Part::find($id);
        if ($part != null){
            $part->delete();
            return response()->noContent();
        }
        return response()->json(['message' => 'El repuesto no existe'], 500);
    }
}
