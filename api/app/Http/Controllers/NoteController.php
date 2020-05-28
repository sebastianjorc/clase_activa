<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    protected $rules = [
        'title' => 'required|min:2|max:90',
        'description' => 'required|min:2'
    ];

    protected $updateRules = [
        'title' => 'min:2|max:90',
        'description' => 'min:2'
    ];

    public function index()
    {
        $user = Auth::user()->id;
        $notes = Note::where('user_id', '=', $user)->paginate();
        return response()->json($notes, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules);
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $note = Note::create($input);
        return response()->json($note, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user()->id;
        $note = Note::where('user_id', '=', $user)->find($id);
        return response()->json($note, 200);
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
        $request->validate($this->updateRules);
        $note = Note::find($id);
        $note->update($request->all());
        return response()->json($note, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::find($id);
        if($note != null){
            $note->delete();
            return response()->noContent();
        }
        return response()->json(['message' => 'La nota no existe'], 500);
    }
}
