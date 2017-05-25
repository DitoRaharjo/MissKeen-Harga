<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

use App\Harga;
use App\Ingredient;

class IngredientController extends Controller
{
  public function getCalory(Request $request) {
    $input = $request->only('ingredients');

    // $ingredients = $input['ingredients'];
    //
    // $totalCalory = 0;
    //
    // foreach ($ingredients as $ingredient) {
    //   $calory = Harga::where('ingredient_id', '=', $ingredient)->pluck('calory_amount')->first();
    //   $totalCalory = $totalCalory + $calory;
    // }

    return response()->json($totalCalory);
  }
}
