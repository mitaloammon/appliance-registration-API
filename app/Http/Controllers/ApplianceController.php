<?php

namespace App\Http\Controllers;

use App\Models\appliance;
use App\Http\Requests\StoreAppliancePost;

class ApplianceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $appliances = appliance::all();
            return response()->json($appliances);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve appliances'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {
        appliance::created($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppliancePost $request)
    {
        try {
            $appliance = appliance::create($request->all());
            return response()->json($appliance, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create appliance'], 500);
        }
    }

    /*
     * Display the specified resource.
     */
    public function show(appliance $id)
    {
        try {
            $appliance = appliance::findOrFail($id);
            return response()->json($appliance);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Appliance not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(appliance $appliance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAppliancePost $request, appliance $id)
    {
        try {
            $appliance = appliance::findOrFail($id);
            $appliance->update($request->all());
            return response()->json($appliance);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update appliance'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(appliance $id)
    {
        try {
            $appliance = appliance::findOrFail($id);
            $appliance->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete appliance'], 500);
        }
    }
}
