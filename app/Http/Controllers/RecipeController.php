<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
   public function index(){
      return view('recipe.index');
    
   }
   public function create(){
      return view ('product.create');
   }
}
