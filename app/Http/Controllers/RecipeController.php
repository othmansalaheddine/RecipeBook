<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
   public function index(){
      return view('recipe.index');
    
   }
   public function create(){
      return view ('recipe.create');
   }
   public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => [
            'required',
            'dimensions:max_width=1000,max_height=500,ratio=3/2',
        ],
    ]);

    $newRecipe = Recipe::create($data);
    return redirect(route('Recipe.index'));
}

}
