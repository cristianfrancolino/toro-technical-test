<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredientRequest;
use App\Http\Requests\UpdateIngredientRequest;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Resources\IngredientResource;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = Ingredient::all();
        return IngredientResource::collection($ingredients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIngredientRequest $request)
    {
        $validated = $request->validated();
        $ingredient = Ingredient::create($validated);

        return response()->json(['message' => 'Ingredient successfully created', 'ingredient' => new IngredientResource($ingredient)], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIngredientRequest $request, string $id)
    {
        $validated = $request->validated();

        try {
            $ingredient = Ingredient::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Ingredient not found'], 404);
        }

        if ($request->has('name')) {
            $ingredient->name = $validated['name'];
        }

        if ($request->has('cost_price')) {
            $ingredient->cost_price = $validated['cost_price'];
        }

        $ingredient->save();

        return response()->json(['message' => 'Ingredient successfully updated', 'ingredient' => $ingredient], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ingredient = Ingredient::find($id);

        if (!$ingredient) {
            return response()->json(['error' => 'Ingredient not found'], 404);
        }

        $ingredient->delete();
        return response()->json(['message' => 'Ingredient successfully deleted', 'ingredient' => new IngredientResource($ingredient)], 200);
    }
}
