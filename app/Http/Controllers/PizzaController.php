<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePizzaRequest;
use App\Http\Requests\UpdatePizzaRequest;
use App\Models\Pizza;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Resources\PizzaResource;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PizzaResource::collection(Pizza::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePizzaRequest $request)
    {
        $validated = $request->validated();

        $pizza = Pizza::create($validated);
        $pizza->ingredients()->attach($validated['ingredients']);

        return response()->json(['message' => 'Pizza successfully created', 'pizza' => $pizza], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $pizza = Pizza::findOrFail($id);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Pizza not found'], 404);
        }

        return new PizzaResource($pizza);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePizzaRequest $request, string $id)
    {
        $validated = $request->validated();

        try {
            $pizza = Pizza::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Pizza not found'], 404);
        }

        if ($request->has('name')) {
            $pizza->name = $validated['nombre'];
        }

        if ($request->has('ingredients')) {
            $pizza->ingredients()->detach();
            $pizza->ingredients()->attach($validated['ingredients']);
        }

        $pizza->save();

        $pizza->load('ingredients');

        return response()->json(['message' => 'Pizza successfully updated', 'pizza' => $pizza], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $pizza = Pizza::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Pizza not found'], 404);
        }

        $pizza->delete();

        return response()->json(['message' => 'Pizza successfully deleted', 'pizza' => $pizza], 200);
    }
}
