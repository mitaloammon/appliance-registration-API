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
        return appliance::all();
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
        return response(appliance::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(appliance $id)
    {
        return appliance::findOrFail($id);
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
        return response(appliance::find($id)->save($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(appliance $id)
    {
        return $appliance = appliance::findOrFail($id);
        $appliance->delete();
    }
}
