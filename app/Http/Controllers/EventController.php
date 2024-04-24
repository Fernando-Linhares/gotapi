<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct(
        private Event $event
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ['data' => $this->event->get()];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ['data' => $this->event->create($request->all())];
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return ['data' => $event];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        if($event->update($request->all()))
            return ['data' => $event];

        return response()->json([], 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if($event->delete())
            return ['data' => $event];

        return response()->json([], 500);
    }
}
