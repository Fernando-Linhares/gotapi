<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function __construct(
        private House $house
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ['data' => $this->house->get()];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ['data' => $this->house->create($request->all())];
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        return ['data' => $house];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, House $house)
    {
        if($house->update($request->all()))
            return ['data' => $house];

        return response()->json([], 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        if($house->delete())
            return ['data' => $house];

        return response()->json([], 500);
    }
}
