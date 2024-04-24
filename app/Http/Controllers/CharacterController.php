<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function __construct(
        private Character $character
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ['data' => $this->character->get()];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ['data' => $this->character->create($request->all())];
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return ['data' => $character];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $character)
    {
        if($character->update($request->all()))
            return ['data' => $character];

        return response()->json([], 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        if($character->delete())
            return ['data' => $character];

        return response()->json([], 500);
    }
}
