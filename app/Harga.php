<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
  protected $table = 'harga';

  protected $fillable = [
  'harga',
  'ingredient_id',
  'created_at',
  'updated_at',
  'deleted_at',
  ];
  // asdsd
  public function ingredient() {
    return $this->belongsTo('App\Ingredient');
  }
}
