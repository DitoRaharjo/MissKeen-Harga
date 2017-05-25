<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

use App\Harga;
use App\Ingredient;

class IngredientController extends Controller
{
  public function getHarga(Request $request) {
    $input = $request->only('ingredients');

    $data = $input['ingredients'];

    $totalHarga = 0;

    foreach ($data as $value) {
      $harga = Harga::where('ingredient_id', '=', $value['id'])->pluck('harga')->first();
      $totalHarga = $totalHarga + ($harga * $value['amount']);
    }

    return response()->json($totalHarga);
  }
}
