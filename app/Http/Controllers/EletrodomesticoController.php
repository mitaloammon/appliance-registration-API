<?php

namespace App\Http\Controllers;

use App\Models\eletrodomestico;
use App\Http\Requests\StoreEletrodomesticoPost;
use App\Http\Requests\UpdateEletrodomesticoRequest;


class EletrodomesticoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $eletrodomestico = eletrodomestico::all();
            return response()->json($eletrodomestico);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve appliances'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {
        eletrodomestico::created($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEletrodomesticoPost $request)
    {
        try {
            $eletrodomestico = eletrodomestico::create($request->all());
            return response()->json($eletrodomestico, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create appliance'], 500);
        }
    }

    /*
     * Display the specified resource.
     */
    public function show(eletrodomestico $id)
    {
        try {
            $eletrodomestico = eletrodomestico::findOrFail($id);
            return response()->json($eletrodomestico);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Appliance not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEletrodomesticoRequest $request, eletrodomestico $id)
    {
        $eletrodomestico = eletrodomestico::find($id);
        $eletrodomestico->update($request->all());
        return response()->json('Eletrodomestico atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $eletrodomestico = eletrodomestico::where('id', $id);

        if (!$eletrodomestico) {
            return response()->json(['message' => 'Eletrodomestico não encontrado'], 404);
        }

        $eletrodomestico->delete();

        return response()->json(['message' => 'Eletrodomestico removido com sucesso']);
    }
}
