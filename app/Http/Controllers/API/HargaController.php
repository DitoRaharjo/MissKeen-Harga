<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

use App\Harga;
use App\Ingredient;

class HargaController extends Controller
{
  public function getAll() {
    $responses = Harga::with('ingredient')->get();
    return response()->json($responses);
  }

  public function getOne($id) {
    $responses = Harga::where('id', '=', $id)->get();
    return response()->json($responses);
  }
}
