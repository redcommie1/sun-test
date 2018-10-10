<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $recipes = Recipe::all();

        return view('home', [
            'recipes' => $recipes
        ]);
    }

    public function getRecipe($id)
    {
        $recipe = Recipe::find($id);

        return view('recipe', [
            'recipe' => $recipe
        ]);
    }
}
