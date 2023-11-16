<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredientRequest;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = Ingredient::all();
        return $ingredients;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIngredientRequest $request)
    {
        $validated = $request->validated();
        $ingredient = Ingredient::create($validated);

        return response()->json(['message' => 'Ingredient successfully created', 'ingredient' => $ingredient], 201);
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
    public function update(Request $request, string $id)
    {
        //
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
        return response()->json(['message' => 'Ingredient successfully deleted', 'ingredient' => $ingredient], 200);
    }
}
