<?php

namespace App\Http\Controllers;

use App\Models\Locale;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function __construct(
        private Locale $locale
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ['data' => $this->locale->get()];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ['data' => $this->locale->create($request->all())];
    }

    /**
     * Display the specified resource.
     */
    public function show(Locale $locale)
    {
        return ['data' => $locale];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Locale $locale)
    {
        if($locale->update($request->all()))
            return ['data' => $locale];
    
        return response()->json([], 500);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Locale $locale)
    {
        if($locale->delete())
            return ['data' => $locale];

        return response()->json([], 500);
    }
}
