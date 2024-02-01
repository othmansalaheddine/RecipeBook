<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
   public function index()
   {
      $recipe = Recipe::all();
      return view('recipe.index', ['recipe' => $recipe]); 
   
   }

   public function create()
   {
      return view('recipe.create');
   }
   public function edit(Recipe $recipe){
      return view('recipe.edit',['recipe'=> $recipe]);
  }

   // public function store(Request $request)
   // {
   //    $request->validate([
   //       'name' => 'required',
   //       'discription' => 'required',
   //       'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   //    ]);


   //    if ($request->hasFile('image')) {
   //       $fileName = time() . $request->file('image')->getClientOriginalName();
   //       $path = $request->file('image')->storeAs('images', $fileName, 'public');
   //       $data = $request->all();
   //       $data['image'] = '/storage/' . $path;
   //       Recipe::create($data);

   //       return redirect(route('recipe.index'));
   //    }

   //    // Handle the case where the 'image' file is not present
   //    return redirect(route('recipe.create'))->with('error', 'Image file is required.');
   // }

   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required',
           'discription' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
   
       if ($request->hasFile('image')) {
           $fileName = time() . $request->file('image')->getClientOriginalName();
           $path = $request->file('image')->storeAs('images', $fileName, 'public');
           $data = $request->all();
           $data['image'] = '/storage/' . $path;
           Recipe::create($data);
           return redirect(route('recipe.index'));
       } else {
           // Handle the case where the 'image' file is not present
           return redirect(route('recipe.create'))->with('error', 'Image file is required.');
       }
   }
   
   public function update(Recipe $recipe, Request $request)
   {
       $data = $request->all();
   
       // Check if a new image is uploaded
       if ($request->hasFile('image')) {
           $fileName = time() . $request->file('image')->getClientOriginalName();
           $path = $request->file('image')->storeAs('images', $fileName, 'public');
           $data['image'] = '/storage/' . $path;
       }
   
       $recipe->update($data);
       return redirect(route('recipe.index'))->with('success', 'Recipe updated successfully');
   }

   public function destroy(Recipe $recipe){
      $recipe->delete();
      return redirect(route('recipe.index'))->with('success', 'recipe deleted successfully');
  }
   
}
