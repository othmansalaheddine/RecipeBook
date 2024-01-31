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
   public function store(Request $request){
     $data = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|image ',

     ]);
         $newRecipe = Recipe::create($data);
   }
}
